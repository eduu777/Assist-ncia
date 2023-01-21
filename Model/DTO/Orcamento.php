<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Orcamento{
		//Atributos
		private $cod;
 		private $data;
 		private $hora;
 		private $stts;
 		private $valor;
 		private $descricao;
 		private $cod_cliente;
 		private $cod_adm;
 				
		//Métodos Getters e Setters
		public function getCod(){
			return $this->cod;
		}
		public function getData(){
			return $this->data;
		}
		public function getHora(){
			return $this->hora;
		}
		public function getStts(){
			return $this->stts;
		}
		public function getValor(){
			return $this->valor;
		}
		public function getDescricao(){
			return $this->descricao;
		}
		public function getCod_cliente(){
			return $this->cod_cliente;
		}
		public function getCod_adm(){
			return $this->cod_adm;
		}
		
		public function setCod($cod){
			$this->cod=$cod;
		}
		public function setData($data){
			$this->data=$data;
		}
		public function setHora($hora){
			$this->hora=$hora;
		}
		public function setStts($stts){
			$this->stts=$stts;
		}
		public function setValor($valor){
			$this->valor=$valor;
		}
		public function setDescricao($descricao){
			$this->descricao=$descricao;
		}
		public function setCod_cliente($cod_cliente){
			$this->cod_cliente=$cod_cliente;
		}
		public function setCod_adm($cod_adm){
			$this->cod_adm=$cod_adm;
		}
		
	}
?>