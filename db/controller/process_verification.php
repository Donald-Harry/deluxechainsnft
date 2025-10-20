<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

include("upload_function.php");

if (isset($_POST['submit'])) {
    $user_id = $_POST['user_id'];
    $question = $_POST['question'];
    $email = $_POST['email'];
    $status ="pending";

    $email_check_sql = "SELECT * FROM `verify` WHERE `email` = ?";
    $stmt = $connect->prepare($email_check_sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
      
        echo '<script>
            alert("Please be advised that your application for verification has already been submitted and is currently awaiting Approval.");
            window.location.href = document.referrer;
        </script>';
        exit();
    }

    $img_upload = upload_file('photo', '../uploads/');
    $img_card = upload_file('card', '../uploads/');
    $img_license = upload_file('license', '../uploads/');

    if ($img_upload['success'] && $img_card['success'] && $img_license['success']) {
        $img_upload_filename = $img_upload['filename'];
        $img_card_filename = $img_card['filename'];
        $img_license_filename = $img_license['filename'];

        $sql = "INSERT INTO `verify` (`user_id`, `photo`, `card`, `license`, `question`, `email`, `status`) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = $connect->prepare($sql);
        $stmt->bind_param("sssssss", $user_id, $img_upload_filename, $img_card_filename, $img_license_filename, $question, $email, $status);

        if ($stmt->execute()) {
            $_SESSION['verify'] ='<div class="rounded-lg bg-gradient-to-r from-amber-400 to-orange-600 p-1">
            <div class="rounded-lg bg-slate-50 px-4 py-4 dark:bg-navy-900 sm:px-5">
              <div>
                <h2 class="text-lg font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                  Verification Pending Approval
                </h2>
              </div>
              <div class="pt-2">
                <p>
                 Thank you for your verification application. We appreciate your interest. Please note that your application is now under review for approval. 
                </p>
              </div>
            </div>
          </div>';
            echo '<script>
                alert("Verification Processing");
                window.location.href = "../dashboard/profile-edit.php";
            </script>';
            exit();
        } else {
            echo '<script>
                alert("An error occurred while inserting data");
                window.location.href = "../traders.php";
            </script>';
            exit();
        }
    } else {
        echo '<script>
            alert("Image upload failed. Please check file types and sizes.");
        </script>';
        exit();
    }
}
?>
