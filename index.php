<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrição de Competidores</title>
</head>
<body>
    <p>Formulario de Inscrição de Competidores</p>

    <form action = "vars.php" method="post">
        <?php
         $sucess = isset($_SESSION['sucess']) ?  $_SESSION['sucess']:'';
         if(!empty($sucess)){
             echo $sucess;
             
         }
            $erro = isset($_SESSION['error']) ?  $_SESSION['error']:'';
            if(!empty($erro)){
                echo $erro;
                
            }

          
        ?>
    <p>Nome: <input type"text" name="nome"/></p>
    <p>Idade: <input type"text" name="idade"/></p>
    <p><input type="submit" value="Salvar"/></p>
    </form>
</body>
</html>