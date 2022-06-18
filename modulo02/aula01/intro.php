<?php
include 'Aluno.php';
include 'Curso.php';
include 'Professor.php';

$al = new Aluno();
$al->nome = 'Alessandro';
$al->cpf = '123.123.123-30';


$aluno = 

$aluno = [
    'nome' => 'Alessandro',
    'cpf' => '123.123.123-12',
];

$aluno2 = [
    'Nome' => 'Bruno',
    'cpf' => '123.111.222-33',
];

$aluno3 = [
    'NOME' => 'Alessandro',
    'CPF' => '345.123.123-23',
];

$cursoPHP = new Curso();
$cursoPHP->nome = 'Introdução ao PHP';
$cursoPHP->cargaHoraria = 88;
$cursoPHP->descicao = 'Aprender o basico e intermediario do PHP';

echo "<h1>Aluno: ($al->nome)</h1>";

