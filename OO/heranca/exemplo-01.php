<?php 

class Documento{

	private $numero;

	public function getNumero(){
		return $this->numero;
	}

	public function setNumeno($numero){
		$this->numero = $numero;
	}

}

class CPF extends Documento{

	public function validar():bool{
		return true;
	}
}

$doc = new CPF();
$doc->setNumeno(11122233344);
print_r($doc->validar());

echo "<br/>";

echo $doc->getNumero();
 ?>