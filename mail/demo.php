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

</body>
</html>

<?php

if(isset($_POST['submit'])){
   
    echo("Hi");

}else if(isset($_POST['btnsubmit'])){

    $to_email = $_POST['username'];
    $subject = "nikx password";
    $otp = rand();
    $headers = "From: ghogharinikunj97@gmail.com";

if (mail($to_email, $subject, $otp, $headers)) {
    // echo "Email successfully sent to $to_email...";
    // echo $body;
} else {
    // echo "Email sending failed...";
}

// if(isset($_POST['btnsubmit'])){

//     $to_email = $_POST['username'];
//     $subject = "nikx password";
//     $otp = rand();
//     $headers = "From: ghogharinikunj97@gmail.com";

// if (mail($to_email, $subject, $otp, $headers)) {
//     // echo "Email successfully sent to $to_email...";
//     // echo $body;
// } else {
//     // echo "Email sending failed...";
// }

 ?>

<script type="text/javascript">
    function ShowHideDiv(btnPassport) {
        var dvPassport = document.getElementById("dvPassport");
        dvPassport.style.display = btnPassport.value == "verify your account" ? "block" : "none";
    }
</script>

<script>
            function myFunction() {
                document.getElementById("GFG").submit();
            }
        </script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">

enter your otp:<input type="text" name="otp">
    <a href=""></a>
    <input type="submit" name="submit" value="verify your account">
    <a href="#" onclick="myFunction()">
              Click here to submit form
            </a>

</form>

</body>
</html>

 <?php
}

?>