<?php 

interface Veiculo{

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);
}


abstract class Automovel implements Veiculo{

 public function acelerar($velocidade){
 	echo "O veiculo acelerou ate " . $velocidade . " km/h";
 }

 public function frenar($velocidade){
 	echo "O veiculo frenou ate " . $velocidade . " km/h";
 }

 public function trocarMarcha($marcha){
 	echo "O veiculo engatou a marcha " . $marcha;
 }

}

class DeyRei extends Automovel{
	
	public function empurrar(){

	}

}


$carro = new DeyRei();
$carro->acelerar(200);

 ?>
