<?php
	
	class Tetse{

		private $tipo;
		private $nota;
		private $id_aluno;
		private $tempo; //em segundos
		private $questoes;

		public function __construct($tipo, $id_aluno, $questoes){
				$this->tipo = $tipo;
				$this->id_aluno = $id_aluno;
				$this->questoes = $questoes;
		}

		public function setNota($nota){
			$this->nota = $nota;
		}

		public function setTempo($tempo){
			$this->tempo = $tempo;
		}

		public function getTipo(){
			return $this->tipo;
		}

		public function getId_Aluno(){
			return $this->id_aluno;
		}

		public function getTempo(){
			return $this->tempo;
		}

		public function getQuestoes(){
			return $this->questoes;
		}

		public function getNota(){
			return $this->nota;
		}

	}

?>