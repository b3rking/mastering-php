<?php

// $date = new DateTime;

// echo $date->format('d/m/Y');

declare (strict_types=1);

class Pont
{
    private float $longueur = 0;
    private float $largeur = 0;
    private const UNITE = 'm²';


    public static function valideTaille(float $l): bool
    {
        if ($l <= 50.0) {
            trigger_error('longueur trop court', E_USER_ERROR);
        }

        return true;
    }

    public function setLongueur(float $l): void
    {
        self::valideTaille($l);

        $this->longueur = $l;
    }

    public function setLargeur(float $l): void
    {
        self::valideTaille($l);

        $this->largeur = $l;
    }

    public function getSurface(): string
    {
        return ($this->longueur * $this->largeur) . self::UNITE;
    }

    public function getLongueur():float
    {
        return $this->longueur;
    }
}

$pont = new Pont;
$pont->setLongueur(235.6);
$pont->setLargeur(254);

var_dump($pont->getSurface());