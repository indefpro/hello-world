<?php

class hello{
	var $hello;
	var $world;
	
	function say(){
		echo $this->hello. ' ' .$this->world;
	}
}
$sayhi = new hello;

$sayhi->hello = "������";
$sayhi->world = "���";

echo $sayhi->say();

?>