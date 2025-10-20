<?php
session_start();

include('connection.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $wallet = $_POST['wallet'];

    if (!$wallet) {

        $_SESSION['update'] = '<div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-ban"></i> Failed!</h5>
        Please enter a wallet address.
      </div>';
        echo"<script>
                window.history.back();
            </script>"; 
            return;

    } else {

        $sql = "UPDATE `admin` SET `wallet`= '$wallet'  WHERE `email` = 'admin@deluxeartnft.com'";

        $run_sql = $connect->query($sql);

        if ($run_sql == TRUE) {

            $_SESSION['update'] = '<div >
        <p style= "
    background-color: #00677f;
    padding: 16px;
    border-radius: 20px;
    color: #bcc4d1;
   width: 50%;  ">Admin wallet updated successfully</p>
      </div>';
        echo"<script>
                window.history.back();
            </script>"; 
            return;

        } else {

            $_SESSION['update'] = '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-ban"></i> Failed!</h5>
            Database could not be updated.
          </div>';
            echo"<script>
                    window.history.back();
                </script>"; 
                return;
        }

        
    }

} else {

    $_SESSION['update'] = '<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-ban"></i> Failed!</h5>
    Error in system, please try again.
  </div>';
    echo"<script>
            window.history.back();
        </script>"; 
        return;
    
}
?>
