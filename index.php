<?php
/**
* class to hold the ccs matrix
*/
class matrixCCS {
	public $jc;
	public $ir;
	public $values;
	
	
	private $matrixFilled = false;
	private $matrix = [];
	public function fill_matrix() {				
		$ir = $this->ir;
		$jc = $this->jc;
		$values = $this->values;
		for ($i = 0; $i < max($ir); $i++) {
			$this->matrix[$i] = [];
			for ($j = 0; $j < max($jc); $j++) {
				$this->matrix[$i][$j] = 0;
			}
		}

		$col = 0;
		$colPtr = 1;
		$colChange = $jc[$colPtr];

		for ($vPtr = 0; $vPtr < count($values); $vPtr++) {
			if ($vPtr == $colChange) {
				$col++;
				$colPtr ++;
				$colChange = $jc[$colPtr];
			}
			$this->matrix[$ir[$vPtr]][$col] = $values[$vPtr];
		}
		
		$this->matrixFilled = true;
	}
	

	public function to_md() {
		if (!$this->matrixFilled) {
			$this->fill_matrix();
		}
		$ir = $this->ir;
		$jc = $this->jc;
		$values = $this->values;
		for ($j = 0; $j < max($jc); $j++) {
			print ' |';
		}
		print PHP_EOL;

		for ($j = 0; $j < max($jc); $j++) {
			print ' --- |';
		}
		print PHP_EOL;


		for ($i = 0; $i < max($ir); $i++) {
			for ($j = 0; $j < max($jc); $j++) {
				print $this->matrix[$i][$j] . ' |';
			}
			print PHP_EOL;
		}
	}

	public function to_html() {
		if (!$this->matrixFilled) {
			$this->fill_matrix();
		}
		$ir = $this->ir;
		$jc = $this->jc;
		$values = $this->values;
		print '<table>';
		
		print('<tr><th class="heading"></th>');
		for ($j = 0; $j < max($jc); $j++) {
			print('<th>' . $j . '</th>');
		}
		print('</tr>');
		for ($i = 0; $i < max($ir); $i++) {
			print('<tr>');
			print('<th class="heading">' . $i . '</th>');
			for ($j = 0; $j < max($jc); $j++) {
				$val = $this->matrix[$i][$j];
				$w = 25;
				print '<td  '. ($val != 0.0 ? 'class="val"' : ''). '>'. $val . '</td>';
			}
			print('</tr>');
		}
		print '</table>';
	}

}


$lp_afiro_Ajc = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 23, 25, 27, 29, 33, 37, 41, 45, 47, 49, 51, 53, 55, 57, 59, 63, 65, 67, 69, 71, 75, 79, 83, 87, 89, 91, 93, 95, 97, 99, 101, 102];
$lp_afiro_Air = [2, 3, 6, 7, 8, 9, 12, 13, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 0, 1, 2, 23, 0, 3, 0, 21, 1, 25, 4, 5, 6, 24, 4, 5, 7, 24, 4, 5, 8, 24, 4, 5, 9, 24, 6, 20, 7, 20, 8, 20, 9, 20, 3, 4, 4, 22, 5, 26, 10, 11, 12, 21, 10, 13, 10, 23, 10, 20, 11, 25, 14, 15, 16, 22, 14, 15, 17, 22, 14, 15, 18, 22, 14, 15, 19, 22, 16, 20, 17, 20, 18, 20, 19, 20, 13, 15, 15, 24, 14, 26, 15];
$lp_afiro_Apr = [1.0,1.0, 1.0, 1.0, 1.0, 1.0, 1.0, 1.0, 1.0, 1.0, 1.0, 1.0, 1.0, 1.0, 1.0, 1.0, 1.0, 1.0, 1.0, -1.0, -1.06, 1.0, 0.301, 1.0, -1.0, 1.0, -1.0, 1.0, 1.0, -1.0, -1.060000000000000053e+00, 1.0, 3.009999999999999898e-01, -1.0, -1.060000000000000053e+00, 1.0, 3.130000000000000004e-01, -1.0, -9.599999999999999645e-01, 1.0, 3.130000000000000004e-01, -1.0, -8.599999999999999867e-01, 1.0, 3.260000000000000120e-01, -1.0, 2.363999999999999435e+00, -9.999999999999998890e-01, 2.385999999999999677e+00, -1.0, 2.407999999999999918e+00, -1.0, 2.428999999999999826e+00, 1.399999999999999911e+00, 1.0, 1.0, -1.0, 1.0, 1.0, -1.0, -4.299999999999999933e-01, 1.0, 1.089999999999999997e-01, 1.0, -1.0, 1.0, -1.0, 1.0, -1.0, 1.0, 1.0, -4.299999999999999933e-01, 1.0, 1.0, 1.089999999999999997e-01, -4.299999999999999933e-01, 1.0, 1.0, 1.079999999999999988e-01, -3.900000000000000133e-01, 1.0, 1.0, 1.079999999999999988e-01, -3.699999999999999956e-01, 1.0, 1.0, 1.069999999999999979e-01, -9.999999999999997780e-01, 2.190999999999999392e+00, -9.999999999999998890e-01, 2.218999999999999861e+00, -1.0, 2.249000000000000110e+00, -1.0, 2.278999999999999471e+00, 1.399999999999999911e+00, -1.0, 1.0, -1.0, 1.0, 1.0, 1.0];

$aMatrix = new matrixCCS();
$aMatrix->jc = $lp_afiro_Ajc;
$aMatrix->ir = $lp_afiro_Air;
$aMatrix->values = $lp_afiro_Apr;


$lp_afiro_Gjc = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50,51];
$lp_afiro_Gir = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50];
$lp_afiro_Gpr = [-1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -9.999999999999998890e-01, -1.0, -1.0, -1.0, -9.999999999999998890e-01, -9.999999999999998890e-01, -1.0, -1.0, -1.0, -1.0, -9.999999999999998890e-01, -1.0, -9.999999999999997780e-01, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -9.999999999999997780e-01, -1.0, -1.000000000000000222e+00, -1.0, -9.999999999999997780e-01, -1.0, -1.0, -1.0];

$gMatrix = new matrixCCS();
$gMatrix->jc = $lp_afiro_Gjc;
$gMatrix->ir = $lp_afiro_Gir;
$gMatrix->values = $lp_afiro_Gpr;


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