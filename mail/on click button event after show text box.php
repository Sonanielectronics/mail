<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
    Email<input id="text" />
</body>
</form>
<script type="text/javascript">
    function ShowHideDiv(btnPassport) {
        var dvPassport = document.getElementById("dvPassport");
        dvPassport.style.display = btnPassport.value == "verify your account" ? "block" : "none";
    }
</script>
<input type="button" value="verify your account" onclick="ShowHideDiv(this)" />
<div id="dvPassport" style="display: none">
    enter your otp:
    <input type="text">
    <input type="button" value="submit">
</div>
</html>