<?php

include "Usuario.php";
include 'Cliente.php';
include 'Gestor.php';
include 'GestorGeral.php';

$c1 = new Cliente('AlessandroAcademy@gmail.com','12345');
$c1->setNome('Alessandro');
$c1->setDataCadastro('17/6/2022');

$g1 = new Gestor('Regis@gmail.com','654321','7000');
$g1->setNome('Regis');

$gg1 = new GestorGeral('mateus037@gmail.com','478444','10000');
