<?php
    require_once __DIR__ . '/../inc/ClienteDAO.php';
    require_once __DIR__ . '/../inc/Cliente.php';
    $dao = new ClienteDAO;
    

    $nome = filter_input(INPUT_POST, "nome");
    $telefone = filter_input(INPUT_POST, "telefone");
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $morada = filter_input(INPUT_POST, "morada");
    $pacote = filter_input(INPUT_POST, "pacote");
    $data_renovacao = filter_input(INPUT_POST, "data_renovacao");
    $data_renovacao = date("y-m-d");
    $data_renovacao = explode("-", $data_renovacao);
    
    $data_nova = $data_renovacao[2] . "/" . $data_renovacao[1] . "/20" . $data_renovacao[0];

    // cria uma nova instancia de cliente
    $c = new Cliente($nome, $telefone, $email, $morada, $data_nova);
    // verifica se houve um post
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header('location: ../public/?pagina=cadastrar');
        exit;
    }

    // verifica se pelo menos o número de telefone e o email forma preenchidos
     if (empty($nome) && empty($telefone)) {
        header('location: ../public/?pagina=cadastrar');
        exit;
    }

    $data = [
        ':nome' => $nome,
        ':telefone' => $telefone,
        ':email' => $email,
        ':morada' => $morada,
        ':pacote' => $pacote,
        ':data_renovacao' => $data_nova
    ];

    $dao->inserirCLiente($data);
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload="mostrarMensagem()">
    <script>
        function mostrarMensagem() {
            alert('Cadastrado com sucesso!')
        }
    </script>
</body>
</html>