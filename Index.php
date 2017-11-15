<?php

Pitagor (12, 5);

function Pitagor ($a, $b)
{
	echo sqrt ($a*$a + $b*$b) . "<br>";
	//echo "Pitagor": 10, 7. Answer " . "X\r\n";
}

///////////////////////////////////////////////

RectangleArea (14, 5);

function RectangleArea ($x, $y)
{

	echo "Area of rectangle" . ($x * $y) . "<br>";
	//echo "Area of rectangle": $a, $b" . "X\r\n";
}
///////////////////////////////////////////////
SquareArea (14);

function SquareArea ($z)
{

	echo "Area of square" . ($z * $z) . "<br>";
}
///////////////////////////////////////////////
CircleArea (5);

function CircleArea ($d)
{

	echo "Area of circle" . (pi() * $d * $d) . "<br>";
}
///////////////////////////////////////////////

TrapezoidArea (3, 5, 7);
function TrapezoidArea ($a, $b, $c)
{

	echo "Area of trapezoid" . (($a + $b) * 0.5 * $c) . "<br>";
}

PentagonArea (5);
function PentagonArea ($e)
{
	echo "Area of pentagon" . (0.25 * sqrt (5*(5 + (2 * sqrt (5)))) * pow ($e, 2)) . "<br>";
}

SallaryAverage (7, 15000);
function SallaryAverage ($x, $y)
//x=zmoniu sk., y=visos algos
{
	echo "Sallary average" . ($y/$x) . "<br>";
}

Profit (5000, 15000, 28000);
function Profit ($a, $b, $c)
//a=sanaudos, b=visos algos, c=pajamos
{
	echo "Profit" . ($c - $a - $b) . "<br>";
}