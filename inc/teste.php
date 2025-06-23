<?php
    require_once 'ClienteDAO.php';
    require_once 'ClienteDAOMySQL.php';
    require_once 'Conexao.php';
    $pdo = new Conexao();
    $c = new Cliente("Josimar", "95485421", "josemar@email", "vip", "normal");
   
    $dao = new ClienteDAOMySQL($pdo->conexao());

    $ver = $dao->inserirCLiente($c);   
    echo "<pre>"; 
    var_dump($ver);