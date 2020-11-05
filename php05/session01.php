<?php
//これ忘れない
//一番最初
session_start();
$sid = session_id();

echo $sid;

$_SESSION['name'] ='福嶋';
$_SESSION['age'] =99;
$_SESSION['love'] ='ラーメン二郎ootukatenn';




print_r($_SESSION);

?>