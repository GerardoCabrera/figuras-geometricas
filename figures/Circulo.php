<?php

require_once('GeometricsFigures.php');

class Circulo extends GeometricsFigures {

    function __construct($diametro) {
        parent::__construct('Círculo', null, null, $diametro);
    }

    public function getArea() {
        $ratio = $this->getDiameter() / 2;
        return number_format((M_PI * pow($ratio, 2)), 2, '.', ',');
    }
}
