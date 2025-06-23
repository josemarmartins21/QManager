<?php
    $rotas_disponiveis = require_once __DIR__. '/../inc/rotas.php';

    $rotas = $_GET['pagina'] ?? 'home';


    if ($rotas === 'cadastrados') {
        $rotas = 'cadastrados';
    }

    if ($rotas === 'cadastrar') {
        $rotas = 'cadastrar';
    }

    if ($rotas === 'relatorios') {
        $rotas = 'relatorios';
    }
    
    if (!in_array($rotas, $rotas_disponiveis)) {
        $rotas = '404';
    }

    $script = null;

    // preparar as rotas
    switch ($rotas) {
        case 'cadastrados':
            $script = $rotas.".php";
            break;
        case 'home':
            $script = $rotas.".php";
            break;
        case '404':
            $script = $rotas.".php";
            break;
        case 'cadastrar':
            $script = $rotas.".php";
            break;
        case 'relatorios':
            $script = $rotas.".php";
            break;
    }


    // carregar as configs de conexão
    require_once __DIR__ . '/../inc/Conexao.php';
    require_once __DIR__ . '/../inc/ClienteDAO.php';

    $db = new Conexao();
   // $dao = new ClienteDAO();
    $data = [
        ':nome' => 'julieta',
        ':email' => 'julieta@email.com',
        ':telefone' => '+24495455646',
        ':pacote' => 'premium',
        ':morada' => 'kilamba',
        ':id_cliente' => 2
    ];
    #$dao->inserirCLiente($data);
   # $dao->deletarCLiente(2);



    // carregar os scripts
    require_once __DIR__. "/../inc/header.php";
    require_once __DIR__ . "/../scripts/$script";
    require_once __DIR__ . "/../inc/footer.php";
   
    
    
   