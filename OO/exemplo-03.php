<?php 

require_once('validacao_cpf.php');

class Documento{

	private $numero;

	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($numero){

		$resultado = CPF::validaCPF($numero);
		if ($resultado === false){
			throw new Exception("CPF informado não é valido", 1);
			
		}
		$this->numero = $numero;

	}

}

$cpf = new Documento();
$cpf->setNumero('90296567000');

print_r($cpf->getNumero());

 ?>