<?php

include 'Produto.php';
include 'Categoria.php';

$c1 = new Categoria('Roupas','Roupas Unissex');
$c2 = new Categoria('Roupas de Banho','Toalhas pra rosto, etc');
$c3 = new Categoria('Calçados','Calçados em geral');

$p1 = new Produto('Tênis para corrida',299, $c3);
$p1->setDescricao('Tênis para corrida profissional');

$p2 = new Produto('Calça Jeans', 100, $c1);


$p3 = new Produto('Calça Branca',99, $c1);

