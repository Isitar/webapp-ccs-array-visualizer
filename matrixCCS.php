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
			for ($j = 0; $j < count($jc); $j++) {
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
		for ($j = 0; $j < count($jc); $j++) {
			print ' |';
		}
		print PHP_EOL;

		for ($j = 0; $j < count($jc); $j++) {
			print ' --- |';
		}
		print PHP_EOL;


		for ($i = 0; $i < max($ir); $i++) {
			for ($j = 0; $j < count($jc); $j++) {
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
		for ($j = 0; $j < count($jc); $j++) {
			print('<th>' . $j . '</th>');
		}
		print('</tr>');
		for ($i = 0; $i < max($ir); $i++) {
			print('<tr>');
			print('<th class="heading">' . $i . '</th>');
			for ($j = 0; $j < count($jc); $j++) {
				$val = $this->matrix[$i][$j];
				$w = 25;
				print '<td  '. ($val != 0.0 ? 'class="val"' : ''). '>'. $val . '</td>';
			}
			print('</tr>');
		}
		print '</table>';
	}

}

?>