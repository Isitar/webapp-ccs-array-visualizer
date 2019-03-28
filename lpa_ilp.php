<?php

require('matrixCCS.php');
$Ajc = [0, 1, 2, 4, 6];
$Air = [0, 1, 0, 1, 0, 1];
$Apr = [1, 1, 1, 1, 2, 0.25];

$aMatrix = new matrixCCS();
$aMatrix->jc = $Ajc;
$aMatrix->ir = $Air;
$aMatrix->values = $Apr;

$Gjc = [0, 1, 2, 3, 4];
$Gir = [0, 1, 2, 3];
$Gpr = [-1.0, -1.0, -1.0, -1.0];

$gMatrix = new matrixCCS();
$gMatrix->jc = $Gjc;
$gMatrix->ir = $Gir;
$gMatrix->values = $Gpr;
