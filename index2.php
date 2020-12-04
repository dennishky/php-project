<?php
$path = 'www.example.com/public_html/index2.php';
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name."\n"; // "index2.php"
?>