<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Orcamento_prod{
		//Atributos
		private $qtd;
 		private $cod_orcamento;
 		private $cod_produto;
 		private $cod;
 				
		//Métodos Getters e Setters
		public function getQtd(){
			return $this->qtd;
		}
		public function getCod_orcamento(){
			return $this->cod_orcamento;
		}
		public function getCod_produto(){
			return $this->cod_produto;
		}
		public function getCod(){
			return $this->cod;
		}
		
		public function setQtd($qtd){
			$this->qtd=$qtd;
		}
		public function setCod_orcamento($cod_orcamento){
			$this->cod_orcamento=$cod_orcamento;
		}
		public function setCod_produto($cod_produto){
			$this->cod_produto=$cod_produto;
		}
		public function setCod($cod){
			$this->cod=$cod;
		}
		
	}
?>