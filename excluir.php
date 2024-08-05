<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/exemplo-banco-de-dados/controller/pessoaController.php';
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .navbar {
            border-bottom: 3px solid blue;
        }
    </style>
    <title>Tela de Exclusão</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Projeto banco de dados</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span><img src="scr/imgs/icon-menu.png" class="icon" alt="menu icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Cadastrar</a></li>
                    <li class="nav-item"><a class="nav-link" href="consultar.php">Consultar</a></li>
                </ul>
            </div>
        </div>
    </nav>

    &nbsp;

    <div class="container">
        <h2>Delete</h2>
        <h5>Nessa página será possível excluir informações cadastradas</h5>
        <?php
        $pessoaController = new PessoaController();
        $pessoa = $pessoaController->buscarPorId($_GET['id']);
        ?>

        <form method="POST" action="controller/pessoaController.php?acao=excluir&id=<?php echo $pessoa['id']; ?>">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" disabled class="form-control" id="nome" name="nome" value="<?php echo $pessoa['nome']; ?>">
            </div>


            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" disabled class="form-control" id="endereco" name="endereco" value="<?php echo $pessoa['endereco']; ?>">
            </div>


            <div class="form-group">
                <label for="bairro">Bairro:</label>
                <input type="text" disabled class="form-control" id="bairro" name="bairro" value="<?php echo $pessoa['bairro']; ?>">
            </div>


            <div class="form-group">
                <label for="cep">CEP:</label>
                <input type="text" disabled class="form-control" id="cep" name="cep" value="<?php echo $pessoa['cep']; ?>">
            </div>


            <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input type="text" disabled class="form-control" id="cidade" name="cidade" value="<?php echo $pessoa['cidade']; ?>">
            </div>


            <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="text" disabled class="form-control" id="estado" name="estado" value="<?php echo $pessoa['estado']; ?>">
            </div>


            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" disabled class="form-control" id="telefone" name="telefone" value="<?php echo $pessoa['telefone']; ?>">
            </div>


            <div class="form-group">
                <label for="celular">Celular:</label>
                <input type="text" disabled class="form-control" id="celular" name="celular" value="<?php echo $pessoa['celular']; ?>">
            </div>


            <button type="submit" class="btn btn-primary">Excluir</button>
        </form>
        <br>
    </div>
</body>

</html>