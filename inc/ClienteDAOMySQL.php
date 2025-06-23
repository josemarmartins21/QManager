<?php
    require_once 'ClienteDAO.php';
    require_once 'Cliente.php';

    class ClienteDAOMySQL extends ClienteDAO {




        public function inserirCLiente(Cliente $cliente): array
        {
            try {
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $this->pdo->prepare("SELECT * FROM clientes");
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if ($stmt->rowCount() > 0) {
                return $data;
            }
            return array("erro");
            } catch (\PDOException $err) {
                die($err->getMessage());
            }
        }
        public function atualizarCLiente(Cliente $atualizar)
        {
            
        }

        public function deletarCLiente($id)
        {
            
        }

        public function listarCLiente()
        {
            
        }

    }