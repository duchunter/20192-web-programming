<?php
$fruits = array('apple', 'banana', 'lemon', 'watermelon');

$q = $_GET["q"];

$hint = "";
if (strlen($q) > 0) {
  $hint = "";
  foreach ($fruits as $f) {
    if (strpos($f, $q) != false) {
        $hint += "<p>$f</p>";
    }
  }
}

if ($hint == "") {
  $response= "no data";
} else {
  $response = $hint;
}

echo $response;
?>
