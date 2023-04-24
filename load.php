<?php
session_start();
$patch = $_SERVER['HTTP_HOST'];
$auth = $_SESSION['auth'] ?? null;

// echo md5('123') . PHP_EOL;

// echo md5('111');
?>