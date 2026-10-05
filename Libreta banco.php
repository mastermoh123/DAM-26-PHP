

<?php
$anos = 22;
$saldo = 500;

echo "Al nacer un niño sus padres le abren una libreta de ahorros en la que ingresan todos los años 300 euros. \
A dicho dinero el banco abona el día 31 de diciembre de cada año unos intereses del 21% de la cantidad disponible \
en la libreta en dicho momento. Después de $anos años el niño retira el dinero, ¿de cuánto dispone?\n";

for ($anyo = 1; $anyo <= $anos; $anyo++) {
    $saldo = ($saldo + 300) * 1.21;
}

echo 'Después de ' . $anos . ' años dispone de ' . number_format($saldo, 2, ',', '.') . " euros.\n";
?>
