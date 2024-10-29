<<?php
function getSquareArea($base,$height)
{
    return $base*$height;
}
function getTriangleArea($base,$height)
{
    return $base*$height/2;
}
function getTrapezoidArea($upperBase,$lowBase,$height)
{
    return($upperBase+$lowBase)*$height/2;
}

echo getSquareArea(5,5)."\n";
echo getTriangleArea(7,8)."\n";
echo getTrapezoidArea(4,5,4);