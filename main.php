<!DOCTYPE html>
<html>
<head>
    <title>Calculadora PHP</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h2>Calculadora PHP</h2>
    <form id="calculatorForm">
        <label for="num1">Número 1:</label>
        <input type="text" pattern="[0-9]+" name="num1" id="num1" required>
        <br>
        <label for="num2">Número 2:</label>
        <input type="text" pattern="[0-9]+" name="num2" id="num2" required>
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
    <p id="result" class="result"></p>

    <script>
        const form = document.querySelector("#calculatorForm");
        const resultParagraph = document.querySelector("#result");

        form.addEventListener("submit", function (event) {
            event.preventDefault();
            const num1 = parseInt(document.querySelector("#num1").value);
            const num2 = parseInt(document.querySelector("#num2").value);
            const operation = document.querySelector("#operation").value;
            let result = 0;

            switch (operation) {
                case "sum":
                    result = num1 + num2;
                    break;
                case "sub":
                    result = num1 - num2;
                    break;
                case "mul":
                    result = num1 * num2;
                    break;
                case "div":
                    if (num2 !== 0) {
                        result = num1 / num2;
                    } else {
                        result = "Error: No es posible dividir por cero.";
                    }
                    break;
                default:
                    result = "Error: Operación no válida.";
                    break;
            }

            resultParagraph.textContent = `Resultado: ${result}`;
        });
    </script>
</body>
</html>

