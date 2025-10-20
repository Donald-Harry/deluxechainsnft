<?php
error_reporting(E_ALL);

// Enable the display of errors
ini_set('display_errors', 1);
session_start();
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nft_amount = $_POST['nft_amount'];
    $nft_picture = $_POST['nft_picture'];
    $author_name = $_POST['author_name'];
    $balance = floatval($_POST['balance']); // Ensure the balance is treated as a float
    $account_id = $_POST['account_id'];
    $status = "pending";

    // Debugging output
    echo "Balance before insertion: " . $balance . "<br>";

    // Insert data into 'buy' table
    $sql = "INSERT INTO buy (nft_amount, nft_picture, author_name, balance, account_id, status) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param("sssiss", $nft_amount, $nft_picture, $author_name, $balance, $account_id, $status);

    if ($stmt->execute()) {
        echo "Record inserted successfully";
        // Redirect to a success page if needed
        header("Location: ../dashboard/buynft.php");
        exit(); // Add an exit after header redirect to prevent further execution
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }

    $stmt->close();
    $connect->close();
}
?>
