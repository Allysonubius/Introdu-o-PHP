<?php
//abertura php

//Variaveis em PHP
$categorias = [];
$categorias[] = 'infantil' ;
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idosos';

//print_r($categoria);

//Inserção de um voluntário
$nome =  'Allyson';
$idade = 21;

//seleção do volunário
var_dump("Nome: ".$nome);
var_dump("Idade: ".$idade);

//Separação por paramentros das idades com if else.
if($idade >= 6 && $idade <= 12){
    for($I = 0; $I <= count($categorias);$I++)
    {
        if($categorias[$I] == 'infantil')
            echo "O nadador ".$nome. " compete na categoria infantil.";
    }
    //echo 'infantil';
}else if($idade >= 13 && $idade <= 18){
    for($I = 0; $I <= count($categorias);$I++)
    {
        if($categorias[$I] == 'adolescente')
            echo "O nadador ".$nome." compete na categoria adolescente.";
    }
    //echo 'adolescente';
}else if( $idade >= 19 && $idade <= 40){
    for($I = 0; $I <= count($categorias);$I++)
    {
        if($categorias[$I] == 'adulto')
            echo "O nadador ".$nome." compete na categoria adulto.";
    }
    //echo 'adulto';
}else{
    for($I = 0; $I <= count($categorias);$I++)
    {
        if($categorias[$I] == 'idosos')
            echo "O nadador ".$nome." compete na categoria idosos.";
    }
    echo 'idosos';
}


//fechamento php
