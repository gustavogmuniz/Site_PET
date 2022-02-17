<?php 

include_once 'conectar.php';


// parte 1 - Atributos

class pet
{
    private $registro;
    private $nome;
    private $especie;
    private $raca;
    private $cor;
    private $nascimento;
    private $sexo;
    private $conn;

    
    // parte 2 - Get e Set

    public function getRegistro() {
        return $this->registro;
    }

    public function setRegistro($registroA) {
        $this->registro= $registroA;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nomeA) {
        $this->nome= $nomeA;
    }

    public function getEspecie() {
        return $this->especie;
    }

    public function setEspecie($especieA) {
        $this->especie= $especieA;
    }

    public function getRaca() {
        return $this->raca;
    }

    public function setRaca($racaA) {
        $this->raca= $racaA;
    }

    public function getCor() {
        return $this->cor;
    }

    public function setCor($corA) {
        $this->cor= $corA;
    }

    public function getNascimento() {
        return $this->nascimento;
    }

    public function setNascimento($nascimentoA) {
        $this->nascimento= $nascimentoA;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo($sexoA) {
        $this->sexo= $sexoA;
    }

    
    // parte 3 - Métodos

    // Salvar

function salvar()
{
    try
    {
        $this-> conn = new conectar();
        $sql = $this->conn->prepare("insert into pet values (?,?,?,?,?,?,?)");
        @$sql-> bindParam(1, $this->getRegistro(), PDO::PARAM_STR);
        @$sql-> bindParam(2, $this->getNome(), PDO::PARAM_STR);
        @$sql-> bindParam(3, $this->getEspecie(), PDO::PARAM_STR);
        @$sql-> bindParam(4, $this->getRaca(), PDO::PARAM_STR);
        @$sql-> bindParam(5, $this->getCor(), PDO::PARAM_STR);
        @$sql-> bindParam(6, $this->getNascimento(), PDO::PARAM_STR);
        @$sql-> bindParam(7, $this->getSexo(), PDO::PARAM_STR);

        if($sql->execute() == 1)
        {
            return "Registro salvo!";
        }
        $this->conn = null;
    }
    catch(PDOException $exc)
    {
        echo "Erro ao salvar o registro! " . $exc->getMessage();
    }
}


// Alterar

function alterar()
{
    try 
    {
        $this-> conn = new conectar();
        $sql = $this->conn->prepare("select * from pet where registro = ?");
        @$sql-> bindParam(1, $this->getRegistro(), PDO::PARAM_STR);
        $sql->execute();
        return $sql->fetchAll();
        $this->conn = null;
    }
    catch(PDOException $exc)
    {
        echo "Erro ao alterar! " . $exc->getMessage();
    }
}

function alterar2()
{
    try
    {
        $this-> conn = new conectar();
        $sql = $this->conn->prepare("update pet set nomepet = ?, especie = ?, raca = ?, corpredominante = ?, nascimento = ?, sexo = ? where registro = ?");
        @$sql-> bindParam(1, $this->getNome(), PDO::PARAM_STR);
        @$sql-> bindParam(2, $this->getEspecie(), PDO::PARAM_STR);
        @$sql-> bindParam(3, $this->getRaca(), PDO::PARAM_STR);
        @$sql-> bindParam(4, $this->getCor(), PDO::PARAM_STR);
        @$sql-> bindParam(5, $this->getNascimento(), PDO::PARAM_STR);
        @$sql-> bindParam(6, $this->getSexo(), PDO::PARAM_STR);
        @$sql-> bindParam(7, $this->getRegistro(), PDO::PARAM_STR);
        if($sql->execute() == 1)
        {
            return "Registro alterado!";
        }
        $this->conn = null;
    }
    catch(PDOException $exc)
    {
        echo "Erro ao salvar registro! " . $exc->getMessage();
    }
}


// Consultar

function consultar()
{
    try
    {
        $this->conn = new conectar();
        $sql = $this->conn->prepare("select * from pet where nomepet like ?");
        @$sql-> bindParam(1, $this->getNome(), PDO::PARAM_STR);
        $sql->execute();
        return $sql->fetchAll();
        $this->conn = null;
    }
    catch(PDOException $exc)
    {
        echo "Erro para executar consulta!" . $exc->getMessage();
    }
}


// Exclusão

function exclusao()
{
    try
    {
        $this-> conn = new conectar();
        $sql = $this->conn->prepare("delete from pet where registro = ?");
        @$sql-> bindParam(1, $this->getRegistro(), PDO::PARAM_STR);
        
        if($sql->execute() == 1)
        {
            return "Excluido!";
        }
        else
        {
            return "Erro ao excluir!";
        }

        $this->conn = null;
    }
    catch(PDOException $exc)
    {
        echo "Erro ao excluir! " . $exc->getMessage();
    }
}


// Listar


function listar()
{
    try
    {
        
        $this-> conn = new conectar();
        $sql = $this->conn->query("select * from pet order by nomepet");
        $sql-> execute();
        return $sql->fetchAll();
        $this->conn = null;
    }
    catch(PDOException $exc)
    {
        echo "Erro ao se consultar! " . $exc->getMessage();
    }
}

}







?>