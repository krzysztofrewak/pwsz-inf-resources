<?php

class Point
{
    public $x, $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
        echo "Point [" . $this->x . ", " . $this->y . "] has been created." . PHP_EOL;
    }

    public function movePoint(float $xAxisShift, float $yAxisShift): void
    {
        $this->x += $xAxisShift;
        $this->y += $yAxisShift;
    }
}

class Circle
{
    public $center;
    public $radius;

    public function __construct(Point $center, float $radius)
    {
        $this->center = $center;
        $this->radius = $radius;
    }

    public function printCoordinates(): void
    {
        echo "x: " . $this->center->x . PHP_EOL;
        echo "y: " . $this->center->y . PHP_EOL;
    }
}

$inputX = 0;
$inputY = 0;
$inputRadius = 5;

$point = new Point($inputX, $inputY);
$circle = new Circle($point, $inputRadius);

$circle->center->movePoint(rand(0, 10), rand(0, 10));
$circle->printCoordinates();
