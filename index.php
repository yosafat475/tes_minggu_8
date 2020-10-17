<?php
require 'vendor/autoload.php';
use App\Square;
use App\Triangle;
use App\Circle;

echo (new Square())->getArea().PHP_EOL;
echo (new Triangle())->getArea().PHP_EOL;
echo (new Circle())->getArea().PHP_EOL;
