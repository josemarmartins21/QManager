<?php
    require_once __DIR__ . '/../inc/Conexao.php';
    abstract class ClienteDAO {
    protected \PDO $pdo;



    public function __construct(\PDO $conn)
    {
        $this->pdo = $conn;
    }

    abstract public function inserirCLiente(Cliente $cliente);
    abstract public function deletarCLiente($id);
    abstract public function atualizarCLiente(Cliente $atualizar);
    abstract public function listarCLiente();
    
    /*public function inserirCLiente($params = []) {
       $stmt = $this->pdo->prepare("INSERT INTO clientes (nome, telefone, email, pacote, morada, data_renovação) VALUES (:nome, :telefone, :email, :pacote, :morada, :data_renovacao)");
       $stmt->execute($params);

    }

    public function buscarCLiente() {
        $stmt = $this->pdo->query("SELECT * FROM clientes");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    }

    public function atualizarCLiente($dados) {
        $stmt = $this->pdo->prepare("UPDATE clientes SET nome = :nome, telefone = :telefone, email = :email, pacote = :pacote, morada = :morada WHERE id_cliente = :id_cliente");
        $stmt->execute($dados);
        if ($stmt->rowCount() > 0) {
            echo "Cadastrado";
        }
    }

    public function deletarCLiente($id) {
        $stmt = $this->pdo->prepare("DELETE FROM clientes WHERE id_cliente = :id_cliente");
        $stmt->bindValue(":id_cliente",$id, PDO::PARAM_INT);
        $stmt->execute();
    }*/

    } 