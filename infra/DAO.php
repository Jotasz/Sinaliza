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

    private static function getIDbyEmail($email){
        $stmt = self::$pdo_instance->prepare("SELECT id FROM aluno WHERE email=:email");
        $stmt->bindValue(":email", $email);
        $stmt->execute();
        $linha = $stmt->fetch(PDO::FETCH_ASSOC);
        return $linha["id"];
    }

    public static function geraTeste($modulo){
        $quests_select = array();
        
        if($modulo <= 5){
            self::getNQuestoesFrom(10,$modulo,$quests_select);
        }else{
            //6 quest. de Primeiro Socorros
            self::getNQuestoesFrom(6,1,$quests_select);
            //6 quest. de Mecânica
            self::getNQuestoesFrom(6,2,$quests_select);
            //6 quest. de Legislação
            self::getNQuestoesFrom(11,3,$quests_select);
            //6 quest. de Direção Def.
            self::getNQuestoesFrom(11,4,$quests_select);
            //6 quest. de Meio Ambiente
            self::getNQuestoesFrom(6,5,$quests_select);
        }
        return new Teste($modulo, $idaluno, $quests_select);
    }

    private static function getNQuestoesFrom($num_q, $modulo, &$array_to_append){
        $quests = array();
        $count = 0;
        $stmt = self::$pdo_instance->prepare("SELECT * FROM questao WHERE tipo=:tipo");
        $stmt->bindValue(":tipo", $modulo);
        $stmt->execute();
        while ($questao = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $quests[] = $questao;
        }
        while($coun++ < $num_q){
            $rand = rand(0, count($quests) - 1);
            $array_to_append[] = $quests[$rand];
            unset($quests[$rand]);
            $quests = array_values($quests);
        }
    }

    public static function computaTeste($email, $teste){
        $idaluno = self::getIDbyEmail($email);
        $stmt = self::$pdo_instance->prepare("INSERT INTO testesrealizados(idaluno, tipo, nota) VALUES (:idaluno, :tipo, :nota)");
        $stmt->bindValue(":idaluno", $idaluno);
        $stmt->bindValue(":tipo", $teste->getTipo());
        $stmt->bindValue(":nota", $teste->getNota());
        $stmt->execute();
        if($teste->getNota() >= 70){
            DAO::aprovaAluno($idaluno);
        }

    }

    private static function aprovaAluno($id){
        $stmt = self::$pdo_instance->prepare("SELECT modulo FROM aluno WHERE id=:id");
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        $modulo = $res['modulo']; 
        $stmt = self::$pdo_instance->prepare("UPDATE aluno SET modulo=:modulo WHERE id=:id");
        $stmt->bindValue(":modulo", ($modulo == 7) ? 7 : ++$modulo);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
    }
    
    public static function getModNome($mod){
    	$stmt = self::$pdo_instance->prepare("SELECT nome FROM modulo WHERE tipo=:tipo");
    	$stmt->bindValue(":tipo", $mod);
    	$stmt->execute();
    	$modulo =  $stmt->fetch(PDO::FETCH_ASSOC);
    	return $modulo["nome"]; 
    }

    public static function checaAprovacao($email, $modulo){
        $idaluno = self::getIDbyEmail($email);
        $stmt = self::$pdo_instance->prepare("SELECT * FROM testesrealizados WHERE idaluno=:idaluno AND tipo=:modulo");
        $stmt->bindValue(":idaluno", $idaluno);
        $stmt->bindValue(":modulo", $modulo);
        $stmt->execute();
        $status =  array();
        $status['aprovado'] = FALSE;
        $status['vezes'] = 0;
        while($teste=$stmt->fetch(PDO::FETCH_ASSOC)){
            if($teste["nota"] >= 70){
                $status['aprovado'] = TRUE;
            }
            ++$status['vezes'];
        }
        return $status;
    }

    /*MÉTODOS DE CARÁTER ESTATÍSTICOS*/


    public static function getMediaNota($modulo){
        $stmt = self::$pdo_instance->prepare("SELECT * FROM testesrealizados WHERE tipo=:modulo");
        $stmt->bindValue(":modulo", $modulo);
        $stmt->execute();
        $soma = 0;
        $qtd = 0;
        while($teste = $stmt->fetch(PDO::FETCH_ASSOC)){
            $soma += $teste['nota'];
            $qtd++;
        }
        return ($soma/$qtd);
    }
}

?>