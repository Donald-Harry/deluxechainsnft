<?php  
session_start();

include("connection.php");

	if ($_POST['submit'] == "remove_member") {
	
        $id = $_POST['id'];

            $sql = "DELETE FROM `members` WHERE `id` = '$id'";
            
			$query = $connect->query($sql);
			
			echo'<script>
				window.history.back();
			</script>';

	}


	if ($_POST['submit'] == "remove_history") {
	
        $id = $_POST['id'];

            $sql = "DELETE FROM `withrawals` WHERE `id` = '$id'";
            
			$query = $connect->query($sql);
			
			echo'<script>
				window.history.back();
			</script>';

	}

	if ($_POST['submit'] == "remove_nft") {
	
        $id = $_POST['id'];

            $sql = "DELETE FROM `tokens` WHERE `id` = '$id'";
            
			$query = $connect->query($sql);
			
			echo'<script>
				window.history.back();
			</script>';

	} 
	
	
	if ($_POST['submit'] == "remove_buynft") {
	
        $id = $_POST['id'];

            $sql = "DELETE FROM `buy` WHERE `id` = '$id'";
            
			$query = $connect->query($sql);
			
			echo'<script>
				window.history.back();
			</script>';

	} 

	if ($_POST['submit'] == "remove") {
	
        $id = $_POST['id'];

            $sql = "DELETE FROM `trades` WHERE `id` = '$id'";
            
			$query = $connect->query($sql);
			
			echo'<script>
				window.history.back();
			</script>';

	}

	if ($_POST['submit'] == "approve") {
	
        $transact_id = $_POST['transaction'];

            $sql = "UPDATE `withrawals` SET `status`= 'Approved' WHERE `transact_id` = '$transact_id'";
            
			$query = $connect->query($sql);

       if ($query == TRUE) {

            $_SESSION['approval'] = '<p style="color: green; font-size: 20px">Transaction has been approved!</p>';
        echo"<script>
                window.history.back();
            </script>"; 
            return;

        } else {

            $_SESSION['approval'] = '<p style="color: red; font-size: 20px">Approval Failed!</p>';
            echo"<script>
                    window.history.back();
                </script>"; 
                return;
        }
  }

  if ($_POST['submit'] == "approvenft") {
	
        $collection_id = $_POST['collection_id'];

            $sql = "UPDATE `tokens` SET `status`= 'Approved' WHERE `collection_id` = '$collection_id'";
            
			$query = $connect->query($sql);

       if ($query == TRUE) {

            $_SESSION['nft'] = '<p  style="color: green; background-color: white; padding: 20px; border-radius: 10px; font-size: 20px">NFT has been approved!</p>';
        echo"<script>
                window.history.back();
            </script>"; 
            return;

        } else {

            $_SESSION['nft'] = '<p style="color: red; font-size: 20px">NFT Approval Failed!</p>';
            echo"<script>
                    window.history.back();
                </script>"; 
                return;
        }
  } 
  
    if ($_POST['submit'] == "approve_buynft") {
	
        $id = $_POST['id'];

            $sql = "UPDATE `buy` SET `status`= 'Approved' WHERE `id` = '$id'";
            
			$query = $connect->query($sql);

       if ($query == TRUE) {

            $_SESSION['nft'] = '<p  style="color: green; background-color: white; padding: 20px; border-radius: 10px; font-size: 20px">Purchased NFT has been approved!</p>';
        echo"<script>
                window.history.back();
            </script>"; 
            return;

        } else {

            $_SESSION['nft'] = '<p style="color: red; font-size: 20px">NFT Approval Failed!</p>';
            echo"<script>
                    window.history.back();
                </script>"; 
                return;
        }
  }

	?>  
	<?php
	
	  if ($_POST['submit'] == "approveverify") {
	
        $id = $_POST['id'];

            $sql = "UPDATE `verify` SET `status`= 'Approved' WHERE `id` = '$id'";
            
			$query = $connect->query($sql);

       if ($query == TRUE) {

            $_SESSION['verified'] = '<p  style="color: green; background-color: white; padding: 20px; border-radius: 10px; font-size: 20px">Account has been approved!</p>';
        echo"<script>
                window.history.back();
            </script>"; 
            return;

        } else {

            $_SESSION['verified'] = '<p style="color: red; font-size: 20px">Approval Failed!</p>';
            echo"<script>
                    window.history.back();
                </script>"; 
                return;
        }
  }

	?>  


	