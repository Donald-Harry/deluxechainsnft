<?php 
include("connection.php");

if (isset($_POST['submit'])) {
  
    $user_id = $_POST['user_id'];

    $address = $_POST['address'];
    $cnumber = $_POST['cnumber'];
    $country = $_POST['country'];

  
    $sql = "UPDATE `members` SET `address` = '$address', `cnumber` = '$cnumber', `country` = '$country' WHERE `id` = $user_id";

   
    $run = $connect->query($sql);

    if ($run) {
        echo '<script>
                alert("Successfully updated profile details");
                window.location.href = "../dashboard/profile-edit.php";
              </script>';
        exit();
    } else {
        echo '<script>
                alert("An error occurred while updating");
                window.location.href = "../traders.php";
              </script>';
        exit();
    }
}
?>
