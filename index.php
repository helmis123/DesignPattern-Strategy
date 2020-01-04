<?php
require "vendor/autoload.php";

$hello = new \App\Country\France();
echo $hello->getHello();
echo '<br>';
echo $hello->getDate();

