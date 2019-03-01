<?php 
if(isset($_POST['submit'])){
    $rand= document.write(generateOTP());
    $msg = "The OTP is '.$rand.';
    $to = $_POST['email'];
    $from =$_POST["ssoniyaster@gmail.com"];
    mail($to, $from, 'My Subject', $message);
    header('Location: thank_you.php')
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
