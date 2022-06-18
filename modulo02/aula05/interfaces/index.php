<?php

include 'Validar.php';
include "ValidarBR.php";
include 'ValidarUS.php';

$cpf = '12312312330';
$docX= '12312312312330';

$br = new ValidarBR();
$br->validarDocumento($cpf);

$us = new ValidarUS();
$us->validarDocumento($docX);

echo 'Validação completa!';