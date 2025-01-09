<?php
// session変数を定義して値を入れよう
session_start();

$_SESSION['number'] = 100;
$_SESSION['languages'] = ['JavaScript', 'PHP', 'Swift', 'Rust'];

var_dump($_SESSION['number']);
var_dump($_SESSION['languages']);

exit();
