<?php 

class Endereco {

	private $locadouro;
	private $numero;
	private $cidade;

	public function __construct($a, $b, $c){

		$this->locadouro = $a;
		$this->numero = $b;
		$this->cidade = $c;

	}

}

$meuEndereco = new Endereco("Rua Rio madeira", "123", "Boa Vista");
print_r($meuEndereco);

 ?>