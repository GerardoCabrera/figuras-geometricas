<?php

require('figures/Circulo.php');
require('figures/Cuadrado.php');
require('figures/Triangulo.php');

class GeometricsFiguresFactory{

    public function Create($type = null, $base = null, $altura = null, $diametro = null){

        switch ($type) {
            case 'Circulo':
                return new Circulo($diametro);
                break;
            case 'Cuadrado':
                return new Cuadrado($base, $altura);
                break;
            case 'Triangulo':
                return new Triangulo($base, $altura);
                break;
            default:
                throw new \Exception("Invalid Type");
                break;
        }

    }

}
