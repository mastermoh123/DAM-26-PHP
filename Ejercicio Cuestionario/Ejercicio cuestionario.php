<?php
$preguntas = [
    [
        'texto' => '¿Qué lenguaje se ejecuta en el servidor en este ejercicio?',
        'opciones' => ['HTML', 'PHP', 'CSS'],
        'correcta' => 1,
    ],
    [
        'texto' => '¿Qué método HTTP se suele usar para enviar las respuestas de un formulario?',
        'opciones' => ['GET', 'POST', 'DELETE'],
        'correcta' => 1,
    ]
];

$resultado = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $respuestas = $_POST['respuestas'] ?? [];
    $puntuacion = 0;

    if (is_array($respuestas)) {
        foreach ($preguntas as $indice => $pregunta) {
            if (isset($respuestas[$indice]) && (int) $respuestas[$indice] === $pregunta['correcta']) {
                $puntuacion++;
            }
        }
    }
    $resultado = $puntuacion;
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cuestionario tipo test</title>
</head>
<body>
    <h1>Cuestionario tipo test</h1>

    <?php if ($resultado !== null): ?>
        <p>Resultado: <?= $resultado ?> de <?= count($preguntas) ?> respuestas correctas.</p>
    <?php endif; ?>

    <form method="post" action="">

        <?php foreach ($preguntas as $indice => $pregunta): ?>
            <p><?= $pregunta['texto'] ?></p>
            <?php foreach ($pregunta['opciones'] as $opcionIndice => $opcion): ?>
                <label>
                    <input type="radio" name="respuestas[<?= $indice ?>]" value="<?= $opcionIndice ?>" required>
                    <?= $opcion ?>
                </label><br>
            <?php endforeach; ?>
        <?php endforeach; ?>
        <br>
        <button type="submit">Finalizar</button>
    </form>
</body>
</html>