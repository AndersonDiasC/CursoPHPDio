<?php
session_start();
$categorias = [];

$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';


$nome = $_POST['nome'];
$idade = $_POST['idade'];

if (empty($nome) && empty($idade)) {
  $_SESSION['error']= "Os Campos NOME e IDADE não podem ser vazios";
  header('location: index.php');
  return;

} else if (empty($nome)) {
   $_SESSION['error']= "Os Campos NOME não pode ser vazio";
   header('location: index.php');
   return;
   
} else if (empty($idade)) {
   $_SESSION['error']= "Os Campos IDADE não pode ser vazio";
   header('location: index.php');
   return;

}

else if (strlen($nome) < 3 && !empty($nome)) {
   $_SESSION['error']= "Os Campos NOME está muito curto";
   header('location: index.php');
   return;
}
else if (strlen($nome) > 40) {
   $_SESSION['error']= "Os Campos NOME está muito grande";
   header('location: index.php');
   $_SESSION['error']='';
   return;
}


else if (!is_numeric($idade) && !empty($idade)) {
   $_SESSION['error']= "Os Campos IDADE precisa ser numérico";
   header('location: index.php');
   return;
}
else if ($idade >= 6 && $idade <= 12) {
   foreach ($categorias as $indice => $valor) {
      if ($categorias[$indice] == 'Infantil')
      {
         $_SESSION['sucess']=  "O Nadador " . $nome . "  deverá competir na categoria " . $categorias[$indice];
         header('location: index.php');
   return;
      }
   
   }
} else if ($idade >= 13 && $idade < 18) {
   foreach ($categorias as $indice => $valor) {
      if ($categorias[$indice] == 'Adolescente') {
         $_SESSION['sucess']=  "O Nadador " . $nome . "  deverá competir na categoria " . $categorias[$indice];
         header('location: index.php');
   return;
      }
   }
} else {
   foreach ($categorias as $indice => $valor) {
      if ($categorias[$indice] == 'Adulto')
      $_SESSION['sucess']=  "O Nadador " . $nome . "  deverá competir na categoria " . $categorias[$indice];
      header('location: index.php');
   return;
   }
}
