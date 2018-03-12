<?php
class abc{
	
	public function test(){
		
		echo "Test from class ABC";
	}
}
trait test{
	
	public function test2(){
		
		echo "test2 method of test trait";
	}
}

class one extends abc{
	
	use test;
}

$obj = new one;
$obj->test2();