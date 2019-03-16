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


print '<html>';
print '<head>';
print <<<CSS
<style>
	table {
		font-size: 12px;
		border: 1px solid black;
		text-align: right;
	}
	th {
		border-bottom: 1px solid black;
	}
	.heading {
		font-style: bold;
		border-right: 1px solid black;
	}
	td {
		min-width: 25px;
		max-width: 25px;
		height: 25px;
	}
	.val {
		font-weight: bold;
		background-color: lightblue;
	}
</style>
CSS;
print '</head>';
print '<body>';
print '<h1>A-Matrix</h1>';
$aMatrix->to_html();
print '<hr />';
print '<h1>G-Matrix</h1>';
$gMatrix->to_html();

print '</body>';
print '</html>';

?>