<?php 
if(isset($_POST['submit'])){
    $rand= document.write(generateOTP());
    $msg = "The OTP is '.$rand.';

    $to = $_SESSION['email'];

// send email
    mail($to,"Your OTP is",$msg);
    echo "Mail Sent. Thank you " . $full_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
