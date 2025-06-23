<div id="container">
    <form action="../scripts/cadastrar-submit.php" method="post" autocomplete="off">
        <input type="hidden" name="data_renovacao">
        <div class="form-group">
            <label for="nome">Nome</label> <br>
            <input type="text" name="nome" id="nome" placeholder="Digite o nome do cliente" required maxlength="20" minlength="4">
        </div>
        <div class="form-group">
        <label for="telefone">Telefone</label> <br>
        <input type="text" name="telefone" id="telefone" placeholder="Digite o telefone do cliente" required maxlength="13" minlength="9" autocomplete="off">
        </div>
        <div class="form-group">
        <label for="email">Email</label> <br>
        <input type="email" name="email" id="email" placeholder="Digite o email do cliente" maxlength="30" minlength="8">
        </div>
        <div class="form-group">
            <label for="morada">Morada</label> <br>
            <input type="text" name="morada" id="morada" placeholder="Digite a morada do cliente">
        </div>
        <div class="form-group">
            <label for="plano">Plano</label> <br>
            <select name="pacote" id="pacote">
                <option value="" selected>Pacotes disponiveis</option>
                <option value="sandard">Stardand</option>
                <option value="premiun">Premuin</option> 
                <option value="max">Max</option>
            </select>
        </div>
        <input type="submit" value="Cadastrar">
    </form>
</div>
<script src="../assets/js/script.js"></script>