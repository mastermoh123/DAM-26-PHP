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
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        form {
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            gap: 15px;
            width: 100%;
            max-width: 380px;
            box-sizing: border-box;
        }

        form input[type="text"],
        form input[type="number"] {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 1rem;
            box-sizing: border-box;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        form input[type="text"]:focus,
        form input[type="number"]:focus {
            outline: none;
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.15);
        }

        form input[type="submit"] {
            background-color: #6366f1;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s, transform 0.1s;
        }

        form input[type="submit"]:hover {
            background-color: #4f46e5;
        }

        form input[type="submit"]:active {
            transform: scale(0.98);
        }
    </style>
</head>

<body>

    <form action="Mostrar Ejercicio 1.php" method="get">
        <label for="txtEdad">Número:</label>
        <input type="number" name="IntNum" id="IntNum"><br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>