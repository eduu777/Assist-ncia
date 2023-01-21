<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Usuario{
		//Atributos
		private $cod;
 		private $email;
 		private $rua;
 		private $numero;
 		private $cep;
 		private $bairro;
 		private $ponto_ref;
 		private $comp;
 		private $nome;
 		private $s;
 		private $tel1;
 		private $tel2;
 		private $acesso;
 		private $foto;
 				
 	
		//Métodos Getters e Setters
		public function getCod(){
			return $this->cod;
		}
		public function getEmail(){
			return $this->email;
		}
		public function getRua(){
			return $this->rua;
		}
		public function getNumero(){
			return $this->numero;
		}
		public function getCep(){
			return $this->cep;
		}
		public function getBairro(){
			return $this->bairro;
		}
		public function getPonto_ref(){
			return $this->ponto_ref;
		}
		public function getComp(){
			return $this->comp;
		}
		public function getNome(){
			return $this->nome;
		}
		public function getSenha(){
			return $this->senha;
		}
		public function getTel1(){
			return $this->tel1;
		}
		public function getTel2(){
			return $this->tel2;
		}
		public function getAcesso(){
			return $this->acesso;
		}
		public function getFoto(){
			return $this->foto;
		}
		
		public function setCod($cod){
			$this->cod=$cod;
		}
		public function setEmail($email){
			$this->email=$email;
		}
		public function setRua($rua){
			$this->rua=$rua;
		}
		public function setNumero($numero){
			$this->numero=$numero;
		}
		public function setCep($cep){
			$this->cep=$cep;
		}
		public function setBairro($bairro){
			$this->bairro=$bairro;
		}
		public function setPonto_ref($ponto_ref){
			$this->ponto_ref=$ponto_ref;
		}
		public function setComp($comp){
			$this->comp=$comp;
		}
		public function setNome($nome){
			$this->nome=$nome;
		}
		public function setSenha($senha){
			$this->senha=$senha;
		}
		public function setTel1($tel1){
			$this->tel1=$tel1;
		}
		public function setTel2($tel2){
			$this->tel2=$tel2;
		}
		public function setAcesso($acesso){
			$this->acesso=$acesso;
		}
		public function setFoto($foto){
			$this->foto=$foto;
		}
		
	}
?>