<?php 

    class Conexao {
    private string $host;
    private string $pass;
    private string $user;
    private string $dbname;
    private \PDO $pdo;

    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->host = "127.0.0.1";
        $this->pass = "";
        $this->dbname = "qos_tel";
        $this->user = "root";
    }

    public function conexao(): \PDO {
    try {
        $this->pdo = new PDO("mysql:host=" . $this->host . ";dbname=". $this->dbname, $this->user, $this->pass);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $this->pdo;

        } catch (\PDOException $err) {
            
        die('Erro de conexão' . $err->getMessage());
    }
    }
}