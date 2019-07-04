<?php
require_once("proxy.php");
$proxy = new ProxyHandler('localhost:8080','http://www.google.com');
$proxy->execute();
?>