<?php
class conectar extends PDO

{
    
    
    private static $instancia;
    private $query;
    private $host = "localhost:3306";
    private $usuario = "root";
    private $senha = "usbw";
    private $db = "exerccrud";

    
    
    public function __construct()
    {
        parent::__construct("mysql:host=$this->host;dbname=$this->db","$this->usuario","$this->senha");
    }

    
    
    public static function getInstance()
    {
        if(!isset(self::$instancia))
        {
            try
            {
                self::$instancia = new conectar;
                echo 'Você foi conectado!';
            }
            catch(Exception $e)
            {
                echo 'Erro ao se conectar!';
                exit();
            }
        }
        return self::$instancia;
    }

    
    
    public function sql($query)
    {
        $this->getInstance();
        $this->query = $query;
        $stmt = $pdo->prepare($this->query);
        $stmt->execute();
        $pdo = null;
    }
}

?>