<?php
include "Rectangle.php";
$width = 10;
$heigth = 20;
$rectangle = new Rectangle($width,$heigth);
echo "chiều dài là :" . $rectangle->width;
echo "<br>";
echo "chiều rộng là :" . $rectangle->height;
$rectangle->height = 30;
$rectangle->width = 20;
echo "<br>";
echo $rectangle->height;
echo $rectangle->width;
echo "<br>";
echo "chu vi hình chữ nhật là :".$rectangle->getPerimeter();
echo "<br>";
echo "diện tích hình chữ nhật là :".$rectangle->getArea();
echo "<br>";
echo ("Your Rectangle". $rectangle->display());