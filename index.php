<?php

require('GeometricsFiguresFactory.php');

$figuras = ["Circulo", "Cuadrado", "Triangulo"];

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		foreach ($figuras as $key => $value) {
			if ($value == "Circulo") {
				$base = null;
				$altura = null;
				$diametro = rand(1, 100);
			} else if ($value == "Cuadrado") {
				$base = rand(1, 100);
				$altura = $base;
				$diametro = null;
			} else {
				$base = rand(1, 100);
				$altura = rand(1, 100);
				$diametro = null;
			}

			$figura = GeometricsFiguresFactory::Create($value, $base, $altura, $diametro);
			$type = $figura->getType();
			$baseFigura = $figura->getBase();
			$alturaFigura = $figura->getHeight();
			$diametroFigura = $figura->getDiameter();
			$areaFigura = $figura->getArea();

			if ($baseFigura == null) {
				$baseFigura = "Esta figura no tiene esta propiedad";
			}

			if ($alturaFigura == null) {
				$alturaFigura = "Esta figura no tiene esta propiedad";
			}

			if ($diametroFigura == null) {
				$diametroFigura = "Esta figura no tiene esta propiedad";
			}
	?>
		<table>
			<tr>
				<td> Tipo de figura: </td>
				<td> <?= $type; ?> </td>
			</tr>
			<tr>
				<td> Basea: </td>
				<td> <?= $baseFigura; ?> </td>
			</tr>
			<tr>
				<td> Altura: </td>
				<td> <?= $alturaFigura; ?> </td>
			</tr>
			<tr>
				<td> Diámetro: </td>
				<td> <?= $diametroFigura; ?> </td>
			</tr>
			<tr>
				<td> Área: </td>
				<td> <?= $areaFigura; ?> </td>
			</tr>
		</table>
		<br>
	<?php 
		}
	?>
</body>
</html>