<?php
require('matrixCCS.php');

$Ajc = [
		0, //x
		3, //y
		6, //leq 1
		7, //leq 2
		8,9,10
	];

$Air = [
		0,1,2, //x
		0,1,3, //y
		0,1,2,3 // slack
	];

$Apr = [
		1.0,1.0,1.0,//x
		2.0,0.25,1, //y
		1,1, //LEQ slack
		-1,-1 //GEQ slack
	];	
	
	
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
