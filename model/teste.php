<?php
	
	class Teste{

		private $tipo;
		private $nota;
		private $id_aluno;
		private $questoes;

		public function __construct($tipo, $id_aluno, $questoes){
				$this->tipo = $tipo;
				$this->id_aluno = $id_aluno;
				$this->questoes = $questoes;
		}

		public function setNota($nota){
			$this->nota = $nota;
		}

		public function getTipo(){
			return $this->tipo;
		}

		public function getId_Aluno(){
			return $this->id_aluno;
		}

		public function getQuestoes(){
			return $this->questoes;
		}

		public function getNota(){
			return $this->nota;
		}

	}

?>