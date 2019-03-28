<?php
require('matrixCCS.php');
$Ajc = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 16, 19, 21, 27, 30, 32, 38, 41, 43, 49, 52, 54, 60, 63, 65, 70, 72, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90];
$Air = [1, 2, 4, 5, 7, 8, 10, 11, 13, 14, 16, 17, 0, 1, 2, 3, 1, 3, 18, 1, 2, 3, 4, 5, 6, 19, 20, 4, 6, 21, 4, 5, 6, 7, 8, 9, 22, 23, 7, 9, 24, 7, 8, 9, 10, 11, 12, 25, 26, 10, 12, 27, 10, 11, 12, 13, 14, 15, 28, 29, 13, 15, 30, 13, 14, 15, 16, 17, 31, 32, 16, 33, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33];
$Apr = [-1, 1, -1, 1, -1, 1, -1, 1, -1, 1, -1, 1, 1, 150, -20, 0.9, -100, 1, 1, 1, 1, -1, 150, -20, 0.9, 1, 1, -100, 1, 1, 1, 1, -1, 150, -20, 0.9, 1, 1, -100, 1, 1, 1, 1, -1, 150, -20, 0.9, 1, 1, -100, 1, 1, 1, 1, -1, 150, -20, 0.9, 1, 1, -100, 1, 1, 1, 1, -1, 150, -20, 1, 1, -100, 1, 1, 1, 1, -1, 1, 1, -1, 1, 1, -1, 1, 1, -1, 1, 1, -1, 1, 1];
$b = [60, 8000, 0, 0, 9000, 0, 0, 8000, 0, 0, 10000, 0, 0, 9000, 0, 0, 12000, 0, 18, 57, 75, 18, 57, 75, 18, 57, 75, 18, 57, 75, 18, 57, 75, 18 ];
$aMatrix = new matrixCCS();
$aMatrix->jc = $Ajc;
$aMatrix->ir = $Air;
$aMatrix->values = $Apr;
$aMatrix->b = $b;

$Gjc = [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46 ];
$Gir = [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45 ];
$Gpr = [ -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0 ];
$h = [ 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0 ];	
$gMatrix = new matrixCCS();
$gMatrix->jc = $Gjc;
$gMatrix->ir = $Gir;
$gMatrix->values = $Gpr;
$gMatrix->b = $h;