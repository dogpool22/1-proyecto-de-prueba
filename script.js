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