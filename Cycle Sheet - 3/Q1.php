<!--19BDS0042 SAMARTH GUPTA-->

<!DOCTYPE html>
<html>
<body>
<h1>The XMLHttpRequest Object</h1>
<h3>Start typing a name in the input field below:</h3>
<form action=""> 
First name: <input type="text" id="txt1" onkeyup="showHint(this.value)">
</form>
<p>Suggestions: <span id="txtHint"></span></p> 
<script>
function showHint(str) {
var xhttp;
if (str.length == 0) { 
document.getElementById("txtHint").innerHTML = "";
return;
}
xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
document.getElementById("txtHint").innerHTML = this.responseText;
}
};
xhttp.open("GET", "Q1.php?q="+str, true);
xhttp.send();   
}
</script></body></html>
<?php
// Array with names
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";
// get the q parameter from URL
$q = $_REQUEST["q"];
$hint = "";
// lookup all hints from array if $q is different from ""
if ($q !== "") {
$q = strtolower($q);
$len=strlen($q);
foreach($a as $name) {
if (stristr($q, substr($name, 0, $len))) {
if ($hint === "") {
$hint = $name;
} else {
$hint .= ", $name";
}
}
}
}
// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>