<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de IMC</title>
</head>
<body>
    <h1>Calculadora de Índice de Massa Corporal (IMC)</h1>

    <form method="post" action="">
        Peso (kg): <input type="text" name="peso"><br>
        Altura (m): <input type="text" name="altura"><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    // Verifica se os campos foram preenchidos
    if (isset($_POST['peso']) && isset($_POST['altura'])) {
        // Obtém os valores do formulário
        $peso = floatval($_POST['peso']);
        $altura = floatval($_POST['altura']);

        // Calcula o IMC
        $imc = $peso / ($altura * $altura);

        // Exibe o resultado
        echo "<h2>Resultado:</h2>";
        echo "Peso: $peso kg<br>";
        echo "Altura: $altura m<br>";
        echo "IMC: " . number_format($imc, 2) . "<br>";

        // Determina a faixa de classificação
        if ($imc < 18.5) {
            echo "Classificação: Abaixo do peso";
        } elseif ($imc >= 18.5 && $imc < 24.9) {
            echo "Classificação: Peso normal";
        } elseif ($imc >= 25 && $imc < 29.9) {
            echo "Classificação: Sobrepeso";
        } elseif ($imc >= 30 && $imc < 34.9) {
            echo "Classificação: Obesidade grau 1";
        } elseif ($imc >= 35 && $imc < 39.9) {
            echo "Classificação: Obesidade grau 2";
        } else {
            echo "Classificação: Obesidade grau 3";
        }
    }
    ?>
</body>
</html>


</body>
</html>