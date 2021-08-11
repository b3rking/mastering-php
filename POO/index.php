<?php

// $date = new DateTime;

// echo $date->format('d/m/Y');

// declare (strict_types=1);

class Pont
{
    public float $longueur = 0;
    public float $largeur = 0;

    public function getSurface(): float
    {
        return $this->longueur * $this->largeur;
    }
}

$pont = new Pont;
$pont->longueur = 235.6;
$pont->largeur = 254;

$surface = $pont->largeur * $pont->longueur;

var_dump($surface);