<?php
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
