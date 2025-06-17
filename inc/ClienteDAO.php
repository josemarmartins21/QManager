<?php
    class ClienteDAO {
    private object $pdo;



    public function __construct()
    {
        $conn = new Conexao();
        $this->pdo = $conn->conexao();
    }
    
    public function inserirCLiente($params = []) {
       $stmt = $this->pdo->prepare("INSERT INTO clientes (nome, telefone, email, pacote, morada) VALUES (:nome, :telefone, :email, :pacote, :morada)");
       $stmt->execute($params);

    }

    public function buscarCLiente() {
        $stmt = $this->pdo->prepare("SELECT * FROM clientes");
        $stmt->execute();
        $dados = $stmt->fetchAll();
        return $dados;
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
    }
    } 