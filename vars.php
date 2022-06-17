<?php

$categorias = [];

$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';


$nome = $_POST['nome'];
$idade = $_POST['idade'];

if (empty($nome) && empty($idade)) {
   echo "Os Campos não podem ser vazios";
   return;
} else if (empty($nome)) {
   echo "O Campo Nome não pode ser vazio";
   return;
} else if (empty($idade)) {
   echo "O Campo Idade não pode ser vazio";
   return;
}

if (strlen($nome) < 3) {
   echo 'O nome deve conter mais que 3 caracteres';
   return;
}
if (strlen($nome) > 40) {
   echo 'O nome é muito extenso';
   return;
}


if (!is_numeric($idade)) {
   echo 'Digite um Valor Numérico para o campo idade!!';
   return;
}
if ($idade >= 6 && $idade <= 12) {
   foreach ($categorias as $indice => $valor) {
      if ($categorias[$indice] == 'Infantil')
         echo "O N                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  adador " . $nome . "  deverá competir na categoria " . $categorias[$indice];
   }
} else if ($idade >= 13 && $idade < 18) {
   foreach ($categorias as $indice => $valor) {
      if ($categorias[$indice] == 'Adolescente') {
         echo "O Nadador " . $nome . "  deverá competir na categoria " . $categorias[$indice];
      }
   }
} else {
   foreach ($categorias as $indice => $valor) {
      if ($categorias[$indice] == 'Adulto')
         echo "O Nadador " . $nome . "  deverá competir na categoria " . $categorias[$indice];
   }
}
