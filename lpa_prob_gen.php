<?php

require('matrixCCS.php');
$Ajc = [0, 1, 2, 3, 4, 7, 10];
$Air = [0, 1, 2, 3, 0, 1, 2, 0, 1, 3];
$Apr = [1, 1, -1, -1, 1, 1, 0, 2, 0.25, 0];

$aMatrix = new matrixCCS();
$aMatrix->jc = $Ajc;
$aMatrix->ir = $Air;
$aMatrix->values = $Apr;

$Gjc = [ 0,1,2,3,4,5,6 ];
$Gir = [ 0,1,2,3,4,5 ];
$Gpr = [ -1.0,-1.0,-1.0,-1.0,-1.0,-1.0, ];

$gMatrix = new matrixCCS();
$gMatrix->jc = $Gjc;
$gMatrix->ir = $Gir;
$gMatrix->values = $Gpr;
