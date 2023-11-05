<?php
$mysqli = new mysqli("localhost","root","","MySQL_web");

// Check connection
if ($mysqli->connect_errno) {
  echo "kết nối lỗi" . $mysqli -> connect_error;
  exit();
}
?>