<?php 	

class Pessoa{

	public $nome = "Rasmus Lerdorf";
	Protected $idade = 48;
	private $senha = "123456";	

	 public function verDados(){
	 		echo $this->nome . "<br/>";
	 		echo $this->idade . "<br/>";
	 		echo $this->senha . "<br/>";
	}
}

$pessoa = new Pessoa();
$pessoa->verDados();

 ?>