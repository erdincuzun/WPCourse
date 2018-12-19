<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
Arama: <input type="text" name="aranan" id="aranan">
<button onclick="get_data()">Getir</button>
<div id="demo">...</div>
    
<script>
function get_data() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  val = document.getElementById("aranan").value;
  xhttp.open("GET", "06_ajax.php?aranan=" + val, true);
  xhttp.send();
}
</script>
</body>
</html>