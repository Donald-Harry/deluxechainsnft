<?php
session_start();
include("connection.php");

function transaction_ref($length) {
	//$character holds the alphanumeric values for the random users' id
	$characters = '0123456789';
		//$reference_num_length holds the string lenghth of $character
		$reference_num_length = strlen($characters);
			// initialize $random_id to empty value
			$reference_num = '';

			for ($i=0; $i < $length; $i++) { 
				$y = rand(0, $reference_num_length-1);
				$random_letters = $characters[$y];
				$reference_num .= $random_letters;
			}
			//returns the generated users' id
			return $reference_num;
} 

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $user_id = $_POST['user_id'];
    $account_id = $_POST['account_id'];
    $wallet_address = $_POST['wallet_address'];
    $currency = $_POST['currency'];
    $amount = $_POST['amount'];
    $commission = $_POST['commission'];
    $type = "Withdrawal";
    date_default_timezone_set("Africa/Lagos");
    $date = date("Y-m-d h:i:sa");
    $reference = transaction_ref(12);
    $status = "pending";

    $sql = "INSERT INTO `withrawals`(`fname`, `email`, `user_id`, `account_id`, `wallet_address`, `currency`, `amount`, `commission`, `type`, `date`, `transact_id`, `status`) VALUES ('$fname','$email','$user_id','$account_id','$wallet_address','$currency','$amount','$commission','$type','$date','$reference','$status')";

    $run_sql = $connect->query($sql);

    if ($run_sql == TRUE) {

        $_SESSION['withdrawal_alert'] = '<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-check"></i> Successful!</h5>
        Your withdrawal will be approved shortly.
      </div>';
       echo '<script>alert("Withdrawal Processing");window.location.href="../dashboard/withdrawal.php";</script>

                    ';
        exit(0);

    } else {

        $_SESSION['withdrawal_alert'] = '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-ban"></i> Failed!</h5>
            Please try again.
          </div>';
            echo"<script>
                    window.history.back();
                </script>"; 
                exit(0);

    }

} else {

    $_SESSION['withdrawal_alert'] = '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-ban"></i> Failed!</h5>
            Request could not be executed.
          </div>';
            echo"<script>
                    window.history.back();
                </script>"; 
                exit(0);

}
?> 