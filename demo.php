<?php
require_once './vendor/autoload.php';

use Mahbub1964\Tempconv\TemperatureConverter;

$converter =  new TemperatureConverter();

$fahrenheit = $converter->convert(20, 'C');
echo "20°C is equivalent to $fahrenheit °F\n";

$celsius = $converter->convert(68, 'F');
echo "68°F is equivalent to $celsius °C\n";
