
<?php
$categorias = [];
$categorias [] = 'infantil';
$categorias [] = 'adolescente';
$categorias [] = 'adulto';
$categorias [] = 'idoso';

$nome = 'Eduardo';
$idade = 61;


if($idade >= 6 && $idade <= 12){
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil'){
            echo "Nadador ", $nome, " compete na categoria ", $categorias[$i];
        }
    }
}
else if($idade >= 13 && $idade <= 17)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adolescente'){
            echo "Nadador ", $nome, " compete na categoria ", $categorias[$i];
        }
    }
}
else if($idade >= 18 && $idade <= 59)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adulto'){
            echo "Nadador ", $nome, " compete na categoria ", $categorias[$i];
        }
    }
}
else{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'idoso'){
            echo "Nadador ", $nome, " compete na categoria ", $categorias[$i];
        }
    }
}


