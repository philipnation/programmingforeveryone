<?php
$msg = $_POST['msg'];
$send = urlencode($msg);
header("location: https://wa.me/+12897026234?text=$send");
?>