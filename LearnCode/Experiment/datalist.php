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
        xmlresult = this.responseText.slice(0, -1);

        // Converting string to 2D array
        result2d = xmlresult.split("|").map(function(e) {
          return e.split(",")
        })

        // Converting 2D array to Object
        console.log(result2d);
        let output = result2d.map(([vctCode, vct, subdist, dist]) => ({vctCode, vct, subdist, dist}))

        // let rtnstr = "";

        // for (let key in output) {
        //   let x = output[key];
        //   let y = x.vctCode +". "+ x.vct + ", Sub Dist. - " + x.subdist + ", Dist. - " + x.dist +"<br>";
        //   rtnstr+=y;
        //   console.log(rtnstr);
        // }

        // document.getElementById("txtHint").innerHTML = rtnstr;

        // Get for input
        let inputstr = "";
        var x = "";
        for (let key in output) {
          x = output[key];
          console.log(x);
          let y = "<option id=optionvalue data-vctCode="+x.vctCode+" value = '"+x.vct+"'>SubDist. - "+x.subdist+", Dist. - "+x.dist+"</option>";
          
          let ptag = "VCT Code - "+x.vctCode+"<br>SubDist. - "+x.subdist+"<br>Dist. - "+x.dist;
          document.getElementById("ptag").innerHTML = ptag;

          inputstr+=y;
          console.log(inputstr);
        }

        document.getElementById("txtHint2").innerHTML = inputstr;

      }
    };

    xmlhttp.open("GET","getlist.php?q="+str,true);
    xmlhttp.send();
  }

  let getvalue = document.getElementById("browser").value;
  // let getvalue = document.getElementById("optionvalue").getAttribute("data-vctCode");

  console.log(getvalue);

}

</script>
</head>
<body>



<form>
<label for="browser">Choose your browser from the list:</label>
<input list="browsers" name="browser" id="browser" placeholder="Please start typing to get suggestion" onkeyup="showUser(this.value)">
<datalist id="browsers">
  <div id="txtHint2"></div>
</datalist>

<br>
<h1>Location Details</h1>
<p id="ptag"></p>

</form>





</body>
</html>