<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Controle de Estoque</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1 class= "row">Sistema de Controle de estoque</h1>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST"){     
            try{
                $email = $_POST['email'];    
                $senha = $_POST['senha'];
                if(($email == "adm@adm.com") && ($senha =="123")){
                    session_start();
                    $_SESSION['usuario'] = $email;
                    $_SESSION['acsso'] = true
                    header('location: principal.php');
                } else {
                    $mensagem['erro'] = 'Usuário e/ou senha incorretos!';
                }
            } catch(Exception $e){
                echo "Erro: ".$e->getMessage();
                die();
            }
            }}
    <form action="" method="POST">   
            <div class="row">        
                <div class="col">
                    <label for="email" class="form-label">Informe seu email: </label>
                    <input type="email" id="d" name="d" class="form-control" required="" placeholder="">
                </div>
                <div class="mb-3 col-2">
                    <label for="m" class="form-label">Senha: </label>
                    <input type="password" id="" name="Senha:" class="form-control" required="" placeholder="">
                </div>
                <div class="mb-3 col-2">
            </div>

            <button type="submit" class="btn btn-primary">Acessar</button>        
        </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>