<?php

class hello{
	var $hello;
	var $world;
	
	function say(){
		echo $this->hello. ' ' .$this->world;
	}
}
$sayhi = new hello;

$sayhi->hello = "Привет";
$sayhi->world = "Мир";

echo $sayhi->say();

?>