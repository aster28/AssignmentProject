<?php 
if(isset($_GET['submit'])){
    $rand= document.write(generateOTP());
    $msg = "The OTP is '.$rand.';
    $to = $_GET['email'];
    $from =$_GET["ssoniyaster@gmail.com"];
    mail($to, $from, 'My Subject', $message);
    header('Location: thankyou.php')
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
