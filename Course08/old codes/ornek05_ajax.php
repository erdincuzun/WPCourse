<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
<script>
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "ornek05_ajax_get.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>
<form> 
First name: <input type="text" onkeyup="showHint(this.value)">
</form>
<p>Öneri: <span id="txtHint"></span></p>    
</body>
</html>
