<?php

// include 'demo2.php' ;

// $otpverify = $_POST['otp'] ;

// $a = 1; 
// echo($a);

// run javascript with condition

?>


<script type="text/javascript">
    <?php
 echo("Hi");
?>

  const btn = document.getElementById("button")
  btn.addEventListener("click", function() {
    if (document.getElementById("welcome1").value === $otp) {
      alert("Welcome");
    } else {
      alert("See you later");
    }
  })
</script>