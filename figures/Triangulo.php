<?php

require_once('GeometricsFigures.php');

class Triangulo extends GeometricsFigures {

    function __construct($base, $altura) {
        parent::__construct('Triángulo', $base, $altura, null);
    }

    public function getArea() {
        return ($this->getBase() * $this->getHeight()) / 2;
    }
}
