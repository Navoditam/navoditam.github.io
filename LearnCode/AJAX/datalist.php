<html>
<head>
<script>
function showUser(str) {
  if (str.length < 2) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","getlist.php?q="+str,true);
    xmlhttp.send("q="+str);
  }
}
</script>
</head>
<body>





<form>
<label for="browser">Choose your browser from the list:</label>
<input list="browsers" name="browser" id="browser" placeholder="Please start typing to get suggestion" onkeyup="showUser(this.value)">
<datalist id="browsers">
<div id="txtHint"></div>
</datalist>





</form>


</body>
</html>