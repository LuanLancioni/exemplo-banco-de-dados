<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/exemplo_banco_de_dados/controller/pessoaController.php';
    //indica onde o arquivo deve buscar informações
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tela de Consulta</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Consulta</h2>
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
                                <th><?php echo $pessoa['nome']; ?></th>
                                <th><?php echo $pessoa['telefone'];?></th>
                                <th><?php echo $pessoa['celular'];?></th>
                                <th>
                                    <a href="editar.php?id=<?php echo $pessoa['id']; ?>">Editar</a>
                                </th>
                            </tr>
                    <?php } ?>
                </tbody>
        </table>
    </div>
</body>
</html>