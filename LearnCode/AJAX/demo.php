<html>
<head>
<script>
function showUser(str) {
  if (str.length < 3) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","get.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>
</head>
<body>

<form>
<!-- <select name="users" onchange="showUser(this.value)">
  <option value="">Select a District:</option>
  <option value="Ambala">Ambala</option>
  <option value="Sirsa">Sirsa</option>
  <option value="Hisar">Hisar</option>
  <option value="Rohtak">Rohtak</option>
  </select> -->

  <input type="text" onkeyup="showUser(this.value)">
</form>
<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>

</body>
</html>