<?php
require_once "vendor/autoload.php";

$hello = new xiezn\demo\Hello();
echo $hello->hello();

echo "\n";
$hiGirl = new xiezn\demo\Hello('My Goddess');
echo $hiGirl->hello();
