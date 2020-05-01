<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Practice</title>
</head>
<body>

	<?php 

		// variable
		echo "Use of Variable"."<br/>";

		$rahim = 10;  // local variable
		$karim = 20;
		echo $rahim + $karim."<br/>";

		$aaa = 23.3;
		$jjj = 42.3;
		echo $aaa+$jjj;

		echo "<hr>";

		$one = "Hello world";
		$two = "How are you?";
		echo $one."<br/>".$two;

		echo "<hr>";
	?>

	<?php

		// array

		echo "Use of Array"."<br/>";

		$mv = array('Hello', 'World', 59); // array
		echo $mv[0].' '.$mv[1];

		echo "<hr>";

		echo "Use of Array with it's index number"."<br/>";

		$values = array(		// array with index number
			'bilai' => 'Tom',
			'idur' => 'Jerry', 'Cartoon',
			'something' => 76
		);
		echo $values['idur'];

		echo "<hr>";


		// function, argument & parameter

		echo "Use of Function"."<br/>";

		function kaj($jekono, $hello){
			echo $hello." ".$jekono;
		}

	?>

	Ami bollam: <?php kaj('BD', 'Hi'); ?>

	<?php 

		echo "<hr>";


		// Return
		echo "Use of Return"."<br/>";

		function kisu(){
			return 'Hello World'; // return
		}
		echo kisu().'<br/>';

		echo "<hr>";

		echo "Use of Function, argument, parameter, return"."<br/>";

		function one($o) {
			return $o;
		}

		function two($t, $phone){
			return one($phone).$t;
		}

		function three($th, $mobile, $time){
			return two($mobile, $time).$th;
		}
		echo "I am counting: ".three('Ami', 'Tumi ', 'Apni ');

		echo "<hr>";

	?>

	<?php 

		// Global variable
		echo "Use of global variable"."<br/>";

		$st = 'Bangladesh <br/>'; // local variable
		$ts = 'I am Developer <br/>';
		function nabil(){
			global $st, $ts; // global variable

			echo $st, $ts;
		}
		nabil();

		// Global variable
		echo "Use of global variable"."<br/>";

		function huda(){
			global $it, $ti; // global variable
			$it = 'Bangladesh <br/>';
			$ti = 'I am Developer';
		}
		huda();
		echo $it, $ti;

		echo "<hr>";

	?>

	<?php 

		// Static variable
		echo "Use of static variable"."<br/>";

		function jac(){
			static $ca = 1; // static variable
			echo $ca;
			$ca++;
		}
		jac();
		jac();
		jac();

		echo "<hr>";

	?>

	<?php 

		// if else condition
		echo "Use of if else condition"."<br/>";

		$passMark = 33;
		$kamal = -32;
		if ($kamal >= $passMark && $kamal <= 100) {
			echo "pass";
		}
		else if ($kamal > 100 || $kamal < 0) {
			echo "invalid result";
		}
		else {
			echo "fail";
		}

		echo "<hr>";

	?>

	<?php 

		// strick condition
		echo "Use of strick condition"."<br/>";

		$x = 'dfd';
		if ($x == 'January') {	// strickly condition milanor jonno === use korte hobe but == atai kaj hoa jabe
			echo "eta January";
		}
		else if ( $x == 'February') {
			echo "eta February";
		}
		else {
			echo "onno kisu";
		}

		echo "<hr>";

	?>

	<?php 

		// condition
		echo "Use of condition"."<br/>";

		$passMark2 = 33;
		$josim = -32;
		if ($josim >= $passMark2 && $josim <= 53) {
			echo "Jasim has been passed";
		}
		else if ($josim > 53 && $josim <= 100) {
			echo "A+";
		}
		else if ($josim < 0 || $josim > 100) {
			echo "Invalid";
		}
		else {
			echo "Jasim has been failed";
		}

		echo "<hr>";

	?>

	<?php 

		// Array, var_dump and print_r
		echo "Use of Array, var_dump and print_r"."<br/>";

		$content = array('I', 3, 'Us', 'Our', 'All');
		var_dump($content);
		echo "<br>";
		print_r($content);

		echo "<hr>";

	?>

	<?php 

		// same result of array by different way
		echo "same result of array by different way"."<br/>";

		$content2[0] = 'I';
		$content2[1] = 'You';
		$content2[2] = 'Us';
		$content2[3] = 'We';
		print_r($content2);

		echo "<hr>";

	?>

	<?php 

		// array_push, array_pop, array_shift and array_unshift
		echo "Use of array_push, array_pop, array_shift and array_unshift"."<br/>";

		$pushContent = array(
			'first' => 'January',
			'second' => 'February',
			'third' => 'March',
			'fourth' => 'April',
		);
		$p = array_push($pushContent, 'May', 'June'); // array_push = array er last a value add korte
		$q = array_pop($pushContent); // array_pop = array er last value bad dite
		$r = array_shift($pushContent); // array_shift = array er first value bad dite
		$y = array_unshift($pushContent, 'ami', 'tumi', 'apni', 'amra'); // array_unshift = array er first a value add korte
		print_r($pushContent);

		echo "<hr>";

	?>

	<?php 

		// array_unique
		echo "Use of array_unique"."<br/>";

		$rtr = array(
			'first' => 'January',
			'second' => 'February',
			'third' => 'March',
			'fourth' => 'January',
		);
		$d = array_unique($rtr);
		print_r($d);

		echo "<br>";

		// array_unique
		echo "Use of array_unique"."<br/>";

		$trt = array('January','February','March','January');
		$e = array_unique($trt);
		print_r($e);

		echo "<hr>";

	?>

	<?php 

		// While Loop
		echo "Use of While Loop"."<br/>";

		$data = 3;
		while ($data <= 10) {
			echo '<h3>'.$data.'</h3>';
			$data++;
		}

		echo "<hr>";

	?>

	<?php 

		// For Loop
		echo "Use of For Loop"."<br/>";

		
		for ($data2 = 3; $data2 <= 10; $data2++) {
			echo '<h3>'.$data2.'</h3>';
		}

		echo "<hr>";

	?>

	<?php 

		// Foreach Loop
		echo "Use of Foreach Loop"."<br/>";

		$arr = array('one', 'two', 'three', 'four', 'five', 'six');
		foreach ($arr as $single) {
			echo $single.'<br>';
		}

		echo "<hr>";

		// Foreach Loop
		echo "Use of Foreach Loop"."<br/>";

		$cv = array(
			'Name' => 'Nabil',
			'Age' => 19,
			'Company' => 'HudaBros-IT',
			'Designation' => 'CEO'
		);
		foreach ($cv as $key => $value) {
			echo '<h3>'.$key.' : '.$value.'</h3>';
		}

	?>

</body>
</html>