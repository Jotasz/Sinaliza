<?php

require_once "../model/aluno.php";
require_once "../model/teste.php";

/**
 * Classe responsável por fazer as operações com o banco de dados
 */
class DAO {

    private static $database = "sinal";
    private static $host = "localhost";
    private static $user = "root";
    private static $password = "123456";
    private static $pdo_instance;

    public function __construc() {
        
    }

    public static function connect() {
        if (!isset(self::$pdo_instance)) {
            self::$pdo_instance = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$database, self::$user, self::$password);
        }
    }

    /* NOVO ALUNO */

    public static function novoAluno($nome, $email, $senha) {
        /* CHECAGEM DE EMAIL */
        if (self::existeEmail($email) == TRUE) {
            return "Email já cadastrado.";
        }

        /* INSERT */
        $stmt = self::$pdo_instance->prepare("INSERT INTO aluno(nome, email, senha) VALUES(:nome, :email, :senha)");
        $stmt->bindValue(":nome", $nome);
        $stmt->bindValue(":email", $email);
        $stmt->bindValue(":senha", $senha);
        $stmt->execute();
    }
    
    public static function getAluno($email){
        $stmt = self::$pdo_instance->prepare("SELECT * FROM aluno WHERE email=:email");
        $stmt->bindValue(":email", $email);
        $stmt->execute();
        $found = $stmt->fetch(PDO::FETCH_ASSOC);
        $aluno = new Aluno($found["nome"], $found["email"], $found["senha"]);
        $aluno->setModulo($found["modulo"]);
        $aluno->setData($found["data"]);
        return $aluno;
    
    }
    

    private static function existeEmail($email) {
        /* CHECAGEM DE EMAIL */
        $stmt = self::$pdo_instance->prepare("SELECT email FROM aluno WHERE email=:email");
        $stmt->bindValue(":email", $email);
        $stmt->execute();

        if ($stmt->rowCount() != 0) {
            return TRUE;
        }
        return FALSE;
    }

    public static function validaLogin($email, $senha) {
        if (self::existeEmail($email) == TRUE) {
            $stmt = self::$pdo_instance->prepare("SELECT id, senha, modulo, data FROM aluno WHERE email=:email");
            $stmt->bindValue(":email", $email);
            $stmt->execute();
            $found = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($found["senha"] == $senha) {
                if($found["modulo"] ==  NULL){
                    $stmt = self::$pdo_instance->prepare("UPDATE aluno SET modulo=:modulo, data=:data WHERE id=:id");
                    $stmt->bindValue(":id", $found["id"]);
                    $stmt->bindValue(":modulo", 1);
                    $stmt->bindValue(":data", date("d/m/Y"));
                    $stmt->execute();
                }
                return TRUE;
            }
        }
        return FALSE;
    }

    public static function getConteudo($modulo){
        $stmt = self::$pdo_instance->prepare("SELECT * FROM conteudo WHERE idmodulo=:modulo");
        $stmt->bindValue(":modulo", $modulo);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function geraTeste($email, $modulo){
        $testesfeitos;
        $idaluno;
        $quests = array();
        $stmt = self::$pdo_instance->prepare("SELECT id FROM aluno WHERE email=:email");
        $stmt->bindValue(":email", $email);
        $stmt->execute();
        $stmt->fetch(PDO::FETCH_ASSOC);
        $idaluno = $stmt["id"];
        $stmt = self::$pdo_instance->prepare("SELECT * FROM testesrealizados WHERE idaluno=:idaluno AND tipo=:modulo");
        $stmt->bindValue(":idaluno", $idaluno);
        $stmt->bindValue(":modulo", $modulo);
        $stmt->execute();
        while($teste=$stmt->fetch(PDO:FETCH_ASSOC)){
            if($teste["nota"] >= 7.0){
                return NULL;
            }
        }
        if($modulo <= 5){
            $num_q = 1;
            $stmt = self::$pdo_instance->prepare("SELECT * FROM questao WHERE tipo=:tipo");
            $stmt->bindValue(":tipo", $modulo);
            $stmt->execute();
            while ($questao=$stmt->fetch(PDO:FETCH_ASSOC)) {
                $quests[$num_q++] = $questao;
            }
            $num_q--;
            while(!empty($quests)){
                $rand(1, $num_q)
            }
        }else{

        }

    }

}

?>