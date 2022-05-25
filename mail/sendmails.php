<?php

if(isset($_POST['btnsubmit'])){

    $to_email = $_POST['username'];
    $subject = "nikx password";
    $body = rand();
    $headers = "From: ghogharinikunj97@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
    echo $body;
} else {
    echo "Email sending failed...";
}

}

// $otp = $_POST['otp'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login system with otp</title>
</head>
<body>

<form action="" method="POST">

Email<input type="text" name="username" value="" required/>
<!-- <input type="submit" name="btnsubmit" value="verify your account" onclick="ShowHideDiv(this)"/> -->

<script type="text/javascript">
    function ShowHideDiv(btnPassport) {
        var dvPassport = document.getElementById("dvPassport");
        dvPassport.style.display = btnPassport.value == "verify your account" ? "block" : "none";
        
    }
</script>
<input type="submit" name="btnsubmit" value="verify your account" onclick="ShowHideDiv(this)" />
<div id="dvPassport" style="display: none">
    enter your otp:
    <input type="text" name="otp">
    <input type="submit"  value="submit">
</div>

</form>


</body>

</html>