<?php
require "getvideos.php";

header("Content-type: application/json; charset=utf-8");
//header("Content-type: text/html; charset=utf-8");
header('Access-Control-Allow-Origin: http://www.sacxinh.com');
header("Access-Control-Allow-Credentials: true ");
header("Access-Control-Allow-Methods: OPTIONS, GET, POST");

$videos = new getvideos();
$videos->run();
