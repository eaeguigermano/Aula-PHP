<?php //todas com tipo definido
    declare(strict_types=1);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>aula 06-03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container mt-4">
    <h1>Resposta 6 formulario 4</h1>
        <?php 
            function arredondaNumero(float $numero): float 
            {
              return round($numero);
            }
    
            if ($_SERVER['REQUEST_METHOD'] == 'POST') 
            {
              try 
              {
                echo "<div class='alert alert-success'><strong>Solução:</strong><br>";
                $num = floatval($_POST['numero']);
                $solucao = arredondaNumero($num);
                echo "o numero arrendodado para $solucao";
    
              } catch(Exception $e){
                  echo $e->getMessage();
              }
            } 
        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>