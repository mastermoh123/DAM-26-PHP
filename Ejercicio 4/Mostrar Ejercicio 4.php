<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            color: #333333;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        p {
            background: #ffffff;
            padding: 16px 24px;
            margin: 8px 0;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            font-size: 1.1rem;
            border-left: 5px solid #6366f1;
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    $salario = 0;

    if (empty($_GET['intPrecio'])) {
        $intPrecio = 15;
    } else {
        $intPrecio = $_GET['intPrecio'];
    }
    
    $intHoras = $_GET['intHoras'];
    $salario = $intHoras * $intPrecio;
    $irpf = $salario * 0.15;

    echo "<p>El sueldo bruto es: " . ($salario * 4) . " y 
        el sueldo tras aplicar el IRPF es: " . (($salario - $irpf) * 4) . "</p>";

    ?>

    <p>Horas trabajadas: <?php echo $intHoras; ?></p>
    <p>Precio por hora: <?php echo $intPrecio; ?></p>

</body>

</html>