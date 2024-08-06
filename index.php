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
    <title>Tela de Cadastro</title>
</head>

<body style="background-color: #f3f6f4;">

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid" >
            <a class="navbar-brand">Projeto banco de dados</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span><img src="scr/imgs/icon-menu.png" class="icon" alt="menu icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php?acao=">Cadastrar</a></li>
                    <li class="nav-item"><a class="nav-link" href="consultar.php?acao=">Consultar</a></li>
                </ul>
            </div>
        </div>
    </nav>

    &nbsp;

    <div class="container">
        <h2>Insert</h2>
        <h5>Nessa página serão cadastrados no banco de dados as informações digitadas a baixo</h5>

        &nbsp;

        <form method="POST" action="controller/pessoaController.php?acao=inserir">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome">
            </div>

            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o endereço">
            </div>


            <div class="form-group">
                <label for="bairro">Bairro:</label>
                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite o bairro">
            </div>


            <div class="form-group">
                <label for="cep">CEP:</label>
                <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite o cep">
            </div>


            <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite a cidade">
            </div>


            <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="text" class="form-control" id="estado" name="estado" placeholder="Digite o estado">
            </div>


            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o telefone">
            </div>


            <div class="form-group">
                <label for="celular">Celular:</label>
                <input type="text" class="form-control" id="celular" name="celular" placeholder="Digite o celular">
            </div>

            <br>

            <button type="submit" class="btn btn-primary">Cadastrar</a></button>
        </form>
        <br>
    </div>
</body>

</html>