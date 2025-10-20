<?php
include("connection.php");

function upload_file($file_input_name, $directory = "") {
    $allowed = array('jpg', 'jpeg', 'png', 'jfif', 'pjpeg', 'pjp', 'ico', 'cur', 'svg', 'gif');

    if (!isset($_FILES[$file_input_name])) {
        return ['success' => false, 'message' => 'File not found.'];
    }

    $uploaded_file = $_FILES[$file_input_name];
    $fileName = $uploaded_file['name'];
    $fileTmpName = $uploaded_file['tmp_name'];
    $fileSize = $uploaded_file['size'];
    $fileType = $uploaded_file['type'];

    $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);
    $fileActualExt = strtolower($fileExt);

    if (in_array($fileActualExt, $allowed)) {
        $date = new DateTime("now");
        $timeStamp = $date->format('U');

        if ($fileSize < 1000000) {
            $fileNameNew = $timeStamp . uniqid('', true) . "." . $fileActualExt;
            $fileDestination = ($directory == "") ? '../uploads/' . $fileNameNew : $directory . $fileNameNew;

            if (move_uploaded_file($fileTmpName, $fileDestination)) {
                return ['success' => true, 'filename' => $fileNameNew];
            } else {
                return ['success' => false, 'message' => 'File upload failed.'];
            }
        } else {
            return ['success' => false, 'message' => 'File size is too big.'];
        }
    } else {
        return ['success' => false, 'message' => 'Unsupported file type.'];
    }
}
?>
