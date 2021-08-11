<?php

// $date = new DateTime;

// echo $date->format('d/m/Y');

// declare (strict_types=1);

class Pont
{
    public float $longueur = 0;
    public float $largeur = 0;
    public string $unite = 'm²';

    public function getSurface(): string
    {
        return ($this->longueur * $this->largeur) .$this->unite;
    }
}

$pont = new Pont;
$pont->longueur = 235.6;
$pont->largeur = 254;

var_dump($pont->getSurface());