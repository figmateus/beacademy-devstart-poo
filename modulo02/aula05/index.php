<?php

include "Usuario.php";
include 'Cliente.php';
include 'Gestor.php';
include 'GestorGeral.php';
include 'Validar.php';

$c1 = new Cliente('bapostolico@gmail.com','123456');
$c1->setNome('Bruno');
$c1->setDataCadastro('01/01/2020');

$cpf = "12312312330";
Validar::validarCpf($cpf);

$c1->setCpf($cpf);

$g1 = new Gestor('priscilipe@gmail.com','12345','5000');
$g1->setNome('Priscila');

$gg1 = new GestorGeral('bapostolico@gmail.com','123','9000');
