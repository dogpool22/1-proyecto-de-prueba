<!DOCTYPE html>
<html>
<head>
    <title>Calculadora PHP</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
/* hola esto es una rama */
<body>
    <h2>Calculadora PHP</h2>
     <form method="post" action="">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" id="num1" required>
        <br>
        <label for="num2">Número 2:</label>
        <input type="number" name="num2" id="num2" required>
        <br>
        <label for="operation">Operación:</label>
        <select name="operation" id="operation">
            <option value="sum">Suma</option>
            <option value="sub">Resta</option>
            <option value="mul">Multiplicación</option>
            <option value="div">División</option>
        </select>
        <br>
        <input type="submit" name="calculate" value="Calcular">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = 0;

        switch ($operation) {
            case 'sum':
                $result = $num1 + $num2;
                break;
            case 'sub':
                $result = $num1 - $num2;
                break;
            case 'mul':
                $result = $num1 * $num2;
                break;
            case 'div':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "<p style='color: red;'>Error: No es posible dividir por cero.</p>";
                }
                break;
            default:
                echo "<p style='color: red;'>Error: Operación no válida.</p>";
                break;
        }

        echo "<p>Resultado: $result</p>";
    }
    ?>

</body>
</html>
