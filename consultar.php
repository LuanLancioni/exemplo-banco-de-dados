<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/exemplo-banco-de-dados/controller/pessoaController.php';
//indica onde o arquivo deve buscar informações
?>
<!DOCTYPE html>
<html>

<head>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .navbar {
            border-bottom: 3px solid blue;
        }
    </style>
    <title>Tela de Consulta</title>
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
        <h2>Select</h2>
        <h5>Nessa página são exibidos os dados cadastrados</h5>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Celular</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $pessoaController = new PessoaController();
                // Objeto da classe PessoaController
                $pessoas = $pessoaController->listar();
                // pessoas recebe a função de listar os dados
                foreach ($pessoas as $pessoa) {
                ?>
                    <tr>
                        <!-- exibe os dados do usuario-->
                        <td><?php echo $pessoa['nome']; ?></td>
                        <td><?php echo $pessoa['telefone']; ?></td>
                        <td><?php echo $pessoa['celular']; ?></td>
                        <!-- botão para editar dados-->
                        <td><a href="editar.php?id=<?php echo $pessoa['id']; ?>">Editar</a></td>
                        <!-- botão para excluir dados-->
                        <td><a href="excluir.php?id=<?php echo $pessoa['id']; ?>">Excluir</a></td>
                    </tr>
            </tbody>
        <?php } ?>
        </tbody>
        </table>
    </div>
</body>

</html>