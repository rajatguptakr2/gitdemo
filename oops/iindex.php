<?php 

class logger{
	
	public function log($message){
		
		echo "System Log Message: " .$message;
	}
}


class UserProfile{
	
	private $logger;
	
	public function createUser(){
		
	
		echo $this->logger->log('User Account is Created');
	}
	public function updateUser(){
		
		echo $this->logger->log('User Account is Updated');
	}
	protected function deleteUser(){
		
		echo $this->logger->log('User Account is Deleted');
	}
	public function __construct($logged){
		
		$this->logger = $logged;
	}
	
	
}

class updatation extends UserProfile{
	
	public function upgradedeleteUser($set_obj,$set_val){
		
		
		echo $set_obj->log($set_val);
	}
	public function __destruct(){
		
		echo "<br>Now Destruct is Working!!!";
	}
}

class get{
	
	private $array = ['Abc'=>'This is Vaild Key','Xyz'=>'This is Vaild XYZ'];
	
	public function createUser(){
		
		
	}
	
	public function __get($name){
		
		if(array_key_exists($name, $this->array)){
			
			return $name." : ".$this->array[$name];
		}else{
			
			echo "$name:- It is not Vaild Key";
		}
		
	} 
	public function __set($name, $value){
		
		if(array_key_exists($name,$this->array)){
			
			return $this->array[$name] = $value;
		}else{
			echo "Invalid data member: $name, cannot set value";
		}
	}
	
	
}
class forking{
	
	
}
trait a1a1a{
	
	public function echoing(){
		
		echo "Echo It.<br>";
	}
}

class getter extends forking{
	
	use a1a1a;
	public function neck(){
		
		
	}
}

//echo phpinfo();

$gone = new getter;
// echo $gone->echoing();

$gett = new get();
///echo $gett->Abc."<br>";
//echo $gett->Absc =' X1Y2Z3<br>';
$logged = new logger();
$get_log = new updatation($logged);

//$get_log->upgradedeleteUser($logged,'<a href="http://www.google.com"><u>Restricted</u></a>');

?> 