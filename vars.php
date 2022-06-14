<?php

$categorias = [];

$categorias[] = 'Infantil'; 
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';


$nome = $_POST['nome'];
$idade = $_POST['idade'];



if($idade >= 6 && $idade <=12)
{
  foreach($categorias as $indice =>$valor)
  {
     if($categorias[$indice]== 'Infantil')
     echo "O Nadador ".$nome."  deverá competir na categoria " .$categorias[$indice];
  }

}else if ( $idade>= 13 && $idade< 18  ){
    foreach($categorias as $indice =>$valor)
    {
       if($categorias[$indice]== 'Adolescente'){
        echo "O Nadador ".$nome."  deverá competir na categoria " .$categorias[$indice];
       }
       
    }
}else {
    foreach($categorias as $indice =>$valor)
    {
       if($categorias[$indice]== 'Adulto')
       echo "O Nadador ".$nome."  deverá competir na categoria ".$categorias[$indice];
    }
}


    ?>