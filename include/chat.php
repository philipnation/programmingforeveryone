<?php
$msg = $_GET['msg'];
$date = date("h:i a");
$file = fopen("log.html", "a");
fwrite($file, "$date - $msg<br>");
$filler = fopen("log.html", "r");
$con = fread($filler, filesize("log.html"));
header("location: index.html");
?>