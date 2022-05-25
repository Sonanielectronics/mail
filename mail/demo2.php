<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login system with otp</title>
</head>
<body>

<form method="POST">

Email<input type="text" name="username" value="" required/>
<input type="submit" name="btnsubmit" value="submit" onclick="ShowHideDiv(this)"/>

</form>
<!-- 
<form method="POST" onclick="location.href='http://localhost/nikunj/mail/index2.php';">

</form> -->

</body>
</html>

<?php


include 'connection.php' ;

if(isset($_POST['btnsubmit'])){

    $to_email = $_POST['username'];
    $subject = "nikx password";
    $otp = rand();
    $headers = "From: ghogharinikunj97@gmail.com";

    $insertquery = " INSERT INTO `23-05-2022`( `email`,`otp`) VALUES ('$to_email','$otp') " ;

    mysqli_query($con,$insertquery);

    if (mail($to_email, $subject, $otp, $headers)) {
    echo "Email successfully sent to $to_email...";
    echo $otp;
        } else {
    echo "Email sending failed...";
    }

 ?>

<script type="text/javascript">
    function ShowHideDiv(btnPassport) {
        var dvPassport = document.getElementById("dvPassport");
        dvPassport.style.display = btnPassport.value == "verify your account" ? "block" : "none";
    }
</script>

<script>
function submitBtn() {
    location.href='http://localhost/nikunj/mail/index2.php'
}

</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

<form method="POST">

enter your otp:<input type="text" name="otp">
<input type="button" name="submit"  onclick= "location.href='http://localhost/nikunj/mail/index2.php';" value="verify your account" />
<?php

// if(isset($_POST['submit'])){

//     $idupdate= $_GET['id'];
//     $otpverify = $_POST['otp'] ;

//     echo("$otpverify");

//     $showquery = "SELECT * FROM 23-05-202 where id={$ids}";

//     $showdata = mysqli_query($con,$showquery);

//     $arrdata = mysqli_fetch_array($showdata);

//     $query = "UPDATE `23-05-2022` SET `otp verify`='$otpverify' where id=$idupdate ";
   
//     mysqli_query($con,$insertquery);
// }

?>
</form>

</body>
</html>

 <?php
}

?>