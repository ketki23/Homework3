<?php

$obj = new main();
$text = "my text";
$obj->printthis($text);
$obj->array_sum();
 class main {
	     public function __construct() {
	     echo 'hello i\'m an Object </br>';
	      }
             public function printthis($text) {
	     echo '<h1>START </h1>';
	     print($text);
	     echo '<hr>';
	     }	

	     public function array_sum(){
	     echo '<h1>array sum function</h1>';
	     $sum = array(10, 20, 30);
	     echo 'sum = ' . (array_sum($sum));
	     echo '<hr>';
	     }



	     public function __destruct() {
	     echo '</br> I\'m Done';
	     }
	     }
	     ?>
