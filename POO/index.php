<?php

// $date = new DateTime;

// echo $date->format('d/m/Y');

declare (strict_types=1);

class Pont
{
    public float $longueur = 0;
}

$pont = new Pont;
$pont->longueur = 235.6;

var_dump($pont);