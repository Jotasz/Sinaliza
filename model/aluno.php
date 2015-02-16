<?php


class aluno {
    private $nome;
    private $id;
    private $email;
    private $login;
    private $senha;
    private $data;
    private $modulo;
    
    public function __construct($nome, $email, $login, $senha, $data) {
        $this->nome = $nome;
        $this->email = $email;
        $this->login = $login;
        $this->senha = $senha;
        $this->data = $data;
        $this->id = 0;
        $this->modulo = 0;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getId() {
        return $this->id;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getLogin() {
        return $this->login;
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

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setLogin($login) {
        $this->login = $login;
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
}
