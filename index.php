<?php

class hello{
	var $hello;
	var $world;
	
	function say(){
		echo $hello. ' ' .$world;
	}
}
$sayhi = new hello;

$sayhi->$hello = "Привет";
$sayhi->$world = "Мир!";

$sayhi->say();

?>