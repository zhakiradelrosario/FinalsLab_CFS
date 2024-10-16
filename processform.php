<?php
session_start();

// correct admin credentials
$myadminName = "Sherry Mongado";
$mypasskey = "TRAVEL2024";

// form is submitted
if (isset($_POST['login'])) {
    $adminName = $_POST['adminName'];
    $passkey = $_POST['passkey'];


    if ($adminName === $myadminName && $passkey === $mypasskey) {
        
        // Set a cookie 
        if (isset($_POST['remember'])) {
            setcookie('adminName', $adminName, time() + (60 * 60 * 7), "/"); // Cookie valid for 7 hours
        }
        
       
        $_SESSION['adminName'] = $adminName;
        
        // Redirect to the admin page
        header("Location: admindash.php");
        exit(); 
        
    } else {
        
        echo "Admin Name or Passkey is Invalid.<br>Click here to <a href='ex1.php'>try again</a>.";
    }
} else {
    // Redirect if form is not submitted properly
    header("Location: ex1.php");
    exit(); 
}
?>
