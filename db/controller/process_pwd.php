<?php 
include("connection.php");

if (isset($_POST['submit'])) {

    $user_id = $_POST['user_id'];
    $cpassword = $_POST['current_password'];
    $newpassword = $_POST['password2'];
 
    $user_id = $connect->real_escape_string($user_id);
    $cpassword = $connect->real_escape_string($cpassword);
    $newpassword = $connect->real_escape_string($newpassword);

    $sql_run = "SELECT `password` FROM `members` WHERE `id` = $user_id";
    $run_sql = $connect->query($sql_run);
    
    if ($run_sql) {
        $details = $run_sql->fetch_assoc();
        $current_password = $details['password'];
    } else {
        echo '<script>
                alert("Error fetching details");
                window.location.href = "../traders.php";
              </script>';
        exit();
    }

    if ($cpassword === $current_password) {
        $sql = "UPDATE `members` SET `password` = '$newpassword' WHERE `id` = $user_id";

        $run = $connect->query($sql);

        if ($run) {
            echo '<script>
                    alert("Successfully updated password");
                    window.location.href = "../dashboard/profile-edit.php";
                  </script>';
            exit();
        } else {
            echo '<script>
                    alert("An error occurred while updating");
                    window.location.href = "../dashboard/home.php";
                  </script>';
            exit();
        }
    } else {
        echo '<script>
                alert("Incorrect current password");
                window.location.href = "../dashboard/profile-edit.php";
              </script>';
        exit();
    }
} else {
    echo '<script>
            alert("Form submission error");
            window.location.href = "../dashboard/home.php";
          </script>';
    exit();
}
?>
