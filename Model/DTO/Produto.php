<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Produto{
		//Atributos
		private $cod;
 		private $modelo;
 		private $fabricante;
 		private $estado;
 		private $foto;
 		private $stts;
 		private $descricao;
 		private $nome;
 		private $cod_usuario;
 				
		//Métodos Getters e Setters
		public function getCod(){
			return $this->cod;
		}
		public function getModelo(){
			return $this->modelo;
		}
		public function getFabricante(){
			return $this->fabricante;
		}
		public function getEstado(){
			return $this->estado;
		}
		public function getFoto(){
			return $this->foto;
		}
		public function getStts(){
			return $this->stts;
		}
		public function getDescricao(){
			return $this->descricao;
		}
		public function getNome(){
			return $this->nome;
		}
		public function getCod_usuario(){
			return $this->cod_usuario;
		}
		
		public function setCod($cod){
			$this->cod=$cod;
		}
		public function setModelo($modelo){
			$this->modelo=$modelo;
		}
		public function setFabricante($fabricante){
			$this->fabricante=$fabricante;
		}
		public function setEstado($estado){
			$this->estado=$estado;
		}
		public function setFoto($foto){
			$this->foto=$foto;
		}
		public function setStts($stts){
			$this->stts=$stts;
		}
		public function setDescricao($descricao){
			$this->descricao=$descricao;
		}
		public function setNome($nome){
			$this->nome=$nome;
		}
		public function setCod_usuario($cod_usuario){
			$this->cod_usuario=$cod_usuario;
		}
		
	}
?>