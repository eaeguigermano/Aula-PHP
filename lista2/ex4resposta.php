<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta do Exercício 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Resposta do exercício 4</h1>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
            try {
            $valor1 = $_POST["valor1"];
            $valor2= $_POST["valor2"];
            
            if ($valor1 == 0 || $valor2 == 0) {
                echo "Não é possível dividir, pois o numerador ou denominador não pode ser zero. Por favor, insira outro número";
            } else {
                $divisao = $valor1 / $valor2;
                echo "O resultado da divisão é: $divisao";
            }
            
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>