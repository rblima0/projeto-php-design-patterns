<?php
class Item {
	
	private $nome;
	private $valor;

	function __construct($nome, $valor){
		$this->nome = $nome;
		$this->valor = $valor;
	}

	public function getNome(){
		$this->nome;
	}

	public function getValor(){
		return $this->valor;
	}
}