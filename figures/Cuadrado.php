<?php

require_once('GeometricsFigures.php');

class Cuadrado extends GeometricsFigures {

    function __construct($base, $altura) {
        parent::__construct('Cuadrado', $base, $altura, null);
    }

    public function getArea() {
        return pow($this->getBase(), 2);
    }
}
