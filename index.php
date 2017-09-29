<?php

$obj = new main();
$text = "Start";
$obj->printthis($text);
$obj->array_sum();
$obj->array_merge();
$obj->rsort();
$obj->shuffle();
$obj->count();
$obj->array_count_values();
$obj->array_change_key_case();
$obj->array_chunk();
$obj->array_pop();
$obj->array_reverse();
$obj->array_unique();
$obj->strlen();
$obj->substr();
$obj->strrev();
$obj->stripos();
$obj->str_replace();
$obj->ucfirst();
$obj->strtolower();
$obj->strtoupper();
$obj->str_word_count();
$obj->substr_count();

 class main {
	     public function __construct() {
	     echo 'homework3 </br>';
	      }
              public function printthis($text){
	      echo '<h3>Strings and arrays</h3>';
	      print($text);
	      echo '<hr>';
	      }

	     public function array_sum(){
	     echo '<h1>array sum function</h1>';
	     $sum = array(10, 20, 30);
	     echo 'sum = ' . (array_sum($sum));
	     echo '<hr>';
	     }
            
	     public function array_merge(){
	     echo '<h1>array merge function</h1>';
	     $a = array(1, 2, 3);
	     $b = array(4, 5, 6);
	     print_r(array_merge($a, $b));
	     echo '<hr>';
	     }
	
	     public function rsort(){
	     echo '<h1>rsort function</h1>';
	     $sort = array (1, 5, 2);
	     (rsort($sort));
	     print_r($sort);
	     echo '<hr>';
	     }
             
	     public function shuffle(){
	     echo '<h1>array shuffle function</h1>';
	     $c = array(1, 2, 3, 4, 5);
	     shuffle($c);
	     print_r($c);
	     echo '<hr>';
	     }

             public function count(){
	     echo '<h1>count function</h1>';
             $d = array(0, 1, 2, 3);
	     count($d);
	     print_r($d);
	     echo '<hr>';
	     }

	     public function array_count_values(){
	     echo '<h1> array count values function</h1>';
	     $e = array(1, 2, 3);
	     array_count_values($e);
	     print_r($e);
	     echo '<hr>';
	     }

	     public function array_change_key_case(){
	     echo '<h1>array change key case function</h1>';
	     $f = array("abc"=>2, "def"=>5);
	     print_r(array_change_key_case($f,CASE_UPPER));
	     echo '<hr>';
	     }
             
	     public function array_chunk(){
	     echo '<h1>array chunk function</h1>';
	     $g = array ("dog", "cat", "pig", "ant");
	     print_r(array_chunk($g, 3));
	     echo '<hr>';
	     }

	     public function array_pop(){
	     echo '<h1>array pop function</h1>';
	     $h = array("john", "kate", "ria");
	     print_r(array_pop($h));
	     echo '<hr>';
	     }

	     public function array_reverse(){
	     echo '<h1>array reverse function</h1>';
	     $i = array("a"=>"apple", "b"=>"banana");
	     print_r(array_reverse($i));
	     echo '<hr>';
	     }

	     public function array_unique(){
	     echo '<h1>array unique function</h1>';
	     $j = array("kite", "ball", "bat", "kite");
	     print_r(array_unique($j));
	     echo '<hr>';
	     }

	     public function strlen(){
	     echo '<h1>string length function</h1>';
	     echo strlen("web sys development");
	     echo '<hr>';
	     }

	     public function substr(){
	     echo '<h1>substring function</h1>';
	     echo substr("web sys development");
	     echo '<hr>';
	     }

	     public function strrev(){
	     echo'<h1>string reverse function</h1>';
	     echo strrev("web sys development");
	     echo '<hr>';
	     }

	     public function stripos(){
	     echo '<h1>stripos functiom</h1>';
	     echo stripos("web systems, development and systems analysis",
	     "systems");
	     echo '<hr>';
	     }

	     public function str_replace(){
	     echo '<h1>string replace function</h1>';
	     echo str_replace("have", "is", "good day");
	     echo '<hr>';
	     }

	     public function ucfirst(){
	     echo '<h1>ucfirst function</h1>';
	     echo ucfirst("good evening");
	     echo '<hr>';
	     }
	    
	     public function strtolower(){
	     echo '<h1>string to lower case function</h1>';
	     echo strtolower("HOW ARE you?");
	     echo '<hr>';
	     }

	     public function strtoupper(){
	     echo '<h1>string to upper case function</h1>';
	     echo strtoupper("where are you?");
	     echo '<hr>';
	     }

	     public function substr_count(){
	     echo '<h1>substring count functon</h1>';
	     echo substr_count("NJIT MSIS, NJIT MBIS", "NJIT");
	     echo '<hr>';
	     }

	     public function str_word_count(){
	     echo '<h1>string word count function</h1>';
	     echo str_word_count("NJIT welcome you");
	     echo '<hr>';
	     }


	     
	    





 
	     public function __destruct() {
	     echo '</br> END';
	     }
	     }
	     ?>
