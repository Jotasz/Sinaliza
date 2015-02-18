<?php

class Aluno {

    private $nome;
    private $email;
    private $senha;
    private $data;
    private $modulo;
    private $id;

    public function __construct($nome, $email, $senha) {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->id = 0;
        $this->modulo = 0;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getData() {
        return $this->data;
    }

    public function getModulo() {
        return $this->modulo;
    }

    public function getId() {
        return $this->id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function setModulo($modulo) {
        $this->modulo = $modulo;
    }

    public function setId($id) {
        $this->id = $id;
    }

}
