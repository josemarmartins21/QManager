<?php
  //$linha = $dao->buscarCLiente();
?>
<div id="tabela">
    <table>
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Email</th>
                <th scope="col">Morada</th>
                <th scope="col">Plano</th>
                <th scope="col">Renovação</th>
                <th scope="col" colspan="2">Ações</th>
            </tr>
        </thead>
        <tbody>
       <?php
       /*foreach($linha as $dado):
       ?>
       <tr>
            <td><?= htmlspecialchars($dado['nome']) ?></td>
            <td><?= htmlspecialchars($dado['telefone']) ?></td>
            <td><?= htmlspecialchars($dado['email']) ?></td>
            <td><?= htmlspecialchars($dado['morada']) ?></td>
            <td><?= htmlspecialchars($dado['pacote']) ?></td>
            <td><?= htmlspecialchars($dado['data_renovação']) ?></td>
            <td><?php echo "<a href='#' class='action-green'>Atualizar</a> <a href='#' class='action-red'>Eliminar</a>" ?></td>
        </tr>
        <?php endforeach; */  ?>  
        <tr>
            <td>aa aa</td>
            <td>aas dd</td>
            <td>as das</td>
            <td>asa sa</td>
            <td>asad ds</td>
            <td>sad da</td>
            <td>dsfd fddf sdsfsdd</td>
        </tr>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="6" scope="row">Total de clientes</th>
                <td>5</td>
            </tr>
        </tfoot>
    </table>
</div>