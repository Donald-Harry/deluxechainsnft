<?php 
include("connection.php");
function upload_file($file_input_name,$directory=""){
  $allowed = array('jpg', 'jpeg', 'png', '.jpg', 'jpeg', 'jfif', 'pjpeg', 'pjp','ico', 'cur','svg','gif','');
  // $id_photo = $_FILES['id_doc'];
  $id_photo = $_FILES[$file_input_name];
  $fileName = $id_photo['name'];
  $fileTmpName = $id_photo['tmp_name'];
  $fileSize = $id_photo['size'];
  $fileError = $id_photo['error'];
  $fileType = $id_photo['type'];

  // determing file extention
  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));



      // id upload side
    // checking if the file extention to be upload is the same as specified
  if (in_array($fileActualExt, $allowed)) {
    $date = new Datetime("now");
    $timeStamp=$date->format('U');
    if ($fileSize <30000000) {
         $fileNameNew = $timeStamp.uniqid('', true).".".$fileActualExt;
         if ($directory =="") {
            $fileDestination = '../uploads/'.$fileNameNew;
         }else{
           $fileDestination = $directory.$fileNameNew;
         }
       
        move_uploaded_file($fileTmpName, $fileDestination);
        $arr = [1,$fileNameNew];
        // $arr .= $fileDestination;
        return $arr;
    }else{
      return "Your file is size too big";
    }
  }else{
    return "You cannot upload files of this type";
  }
}



if (isset($_POST['submit'])) {
	$user_id = $_POST['user_id'];

	$email = $_POST['email'];

	$img_upload =  upload_file('photo','../uploads/');
if(is_array($img_upload)){
	$img_upload = $img_upload[1];
}else{
	echo "<script> alert('".$img_upload."'); window.location.href='../dashboard/profile-edit.php';</script>";
		exit();
}
		
	$sql = "UPDATE `members` SET `photo` = '$img_upload' WHERE `id` = $user_id";

// Execute the SQL query
$run = $connect->query($sql);

if ($run) {
    echo '<script>
            alert("Successfully added photo");
            window.location.href = "../dashboard/profile-edit.php";
          </script>';
    exit();

}else{
	echo'<script>
			alert("An Error occured");
			 window.location.href="../traders.php"
			</script>';
			exit();
}

}

 ?>