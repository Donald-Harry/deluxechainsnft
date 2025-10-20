<?php
session_start();
ini_set('display_errors', 1);

function generate_account_id($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $account_id_length = strlen($characters);
    $account_id = '';

    for ($i = 0; $i < $length; $i++) { 
        $y = rand(0, $account_id_length - 1);
        $random_letters = $characters[$y];
        $account_id .= $random_letters;
    }
    return $account_id;
} 

function new_token($tok) {
    $character_code = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $token_length = strlen($character_code);
    $token_generated = '';

    for ($i = 0; $i < $tok; $i++) { 
        $y = rand(0, $token_length - 1);
        $random_token = $character_code[$y];
        $token_generated .= $random_token;
    }
    return $token_generated;    
}

include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $connect->real_escape_string($_POST['fname']);
    $lastname = $connect->real_escape_string($_POST['lname']);
    $username = $connect->real_escape_string($_POST['username']);
    $email = $connect->real_escape_string($_POST['email']);
    $country = $connect->real_escape_string($_POST['country']);
    $password = $connect->real_escape_string($_POST['password']);
    $cpassword = $connect->real_escape_string($_POST['cpassword']);
    $cnumber = $connect->real_escape_string($_POST['cnumber']);
    
    $client_id = generate_account_id(6);
    date_default_timezone_set("Africa/Lagos");
    $reg_date = date("Y-m-d h:i:sa");

    // Password validation
    if (empty($password) || strlen($password) < 6) {
        $_SESSION['alertMsg'] = "<p style='color: red; font-size: 14.5px;'>Please enter at least 6 characters.</p>";
        echo "<script>window.history.back();</script>";
        return;
    }

    if ($password !== $cpassword) {
        $_SESSION['alertMsg'] = "<p style='color: red; font-size: 14.5px;'>Passwords do not match!</p>";
        echo "<script>window.history.back();</script>";
        return;
    }

    // Email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['alertMsg'] = "<p style='color: red; font-size: 14.5px;'>Please enter a valid email address.</p>";
        echo "<script>window.history.back();</script>";
        return;            
    }

    $emailQuery = "SELECT * FROM `members` WHERE email= '$email'";
    $result = $connect->query($emailQuery);
    if ($result->num_rows > 0) {
        $_SESSION['alertMsg'] = "<p style='color: red; font-size: 14.5px;'>Email already exists!</p>";
        echo "<script>window.history.back();</script>";
        return;
    }

    $hashed_password = $password;
    $token_generated = new_token(12);
    $status = 1;

    $sql = "INSERT INTO `members` (`account_id`, `fname`, `lname`, `username`, `email`, `phone`, `country`, `token`, `status`, `date`, `password`, `cnumber`) 
            VALUES ('$client_id', '$firstname', '$lastname', '$username', '$email', '', '$country', '$token_generated', '$status', '$reg_date', '$hashed_password', '$cnumber')";
            
    if ($connect->query($sql) === TRUE) {
        $verification_link = "https://strategicwealthaccess.com/strategicwealthaccess/fontss/controller/mail_verification.php?token=$token_generated";

        $subject = "Email Verification";
        $headers = "From: support@deluxenftchains.online\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        ob_start();
        include('../mail.php'); 
        $body = ob_get_clean();

        if (mail($email, $subject, $body, $headers)) {
            header("Location: ../successful_reg.php");
            return;
        } else {
            echo 'Verification link could not be sent to your email.';
        }
    } else {
        $_SESSION['alertMsg'] = "<p style='color: red; font-size: 14.5px;'>Your registration failed! Please retry.</p>";
        echo "<script>window.history.back();</script>";
        return;
    }
} else {
    $_SESSION['alertMsg'] = "<p style='color: red; font-size: 14.5px;'>Server Error!</p>";
    echo "<script>window.history.back();</script>";
    return;
}
?>
