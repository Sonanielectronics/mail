<h1>Welcome</h1>

Input: <input id="welcome1" type="text" />

<button id="button">Click here</button>

<script type="text/javascript">
  const btn = document.getElementById("button")
  btn.addEventListener("click", function() {
    if (document.getElementById("welcome1").value === "hi") {
      alert("Welcome");
    } else {
      alert("See you later");
    }
  })
</script>