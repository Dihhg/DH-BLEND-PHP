<?php
    $tituloDaPagina = "Métodos | PHP - Aula 02";
    require_once("./inc/head.php");
?>
<body>
    <?php require_once("./inc/header.php"); ?>
    <main class="container my-5">

        <?php if($_POST && isset($_POST) ): ?>
        
            <?php
                $nome = $_POST["inputNome"];
                $email = $_POST["inputEmail"];
                $senha = $_POST["inputSenha"];
                $endereco = $_POST["inputEndereco1"];
                $cidade = $_POST["inputCidade"];
                $estado = $_POST["inputEstado"];
                $cep = $_POST["inputCep"];
                $aceitou = $_POST["inputAceite"];
            ?>

            <article>
                <h2>Respostas Recebidas por POST:</h2>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Senha</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">UF</th>
                            <th scope="col">CEP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- DESAFIO: INCLUA CADA UM DOS CAMPOS UTILIZANDO O QUE JÁ APRENDEMOS EM PHP -->
                        <tr>
                            <th scope="row"><?php echo $nome; ?></th>
                            <td><?php echo $email; ?></td>
                            <td><?php echo $senha; ?></td>
                            <td><?php echo $endereco; ?></td>
                            <td><?php echo $cidade; ?></td>
                            <td><?php echo $estado; ?></td>
                            <td><?php echo $cep; ?></td>
                        </tr>
                    </tbody>
                </table>
            </article>

        <?php elseif ($_GET && isset($_GET)): ?>

                
            <?php 
                $nome = &$_GET["inputNome"];
                $email = &$_GET["inputEmail"];
                $endereco = &$_GET["inputSenha"];
                $senha = &$_GET["inputEndereco1"];
                $cidade = &$_GET["inputCidade"];
                $estado = &$_GET["inputEstado"];
                $cep = &$_GET["inputCep"];
                $aceitou = &$_GET["inputAceite"];

                
            ?>
            
            <article>
                <h2>Respostas Recebidas por GET:</h2>

                <table class="table">

                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Endereço</th>
                        <th scope="col" colspan="2">Senha</th>
                        <th scope="col">Cidade - UF</th>
                        <th scope="col">Estado</th>
                        <th scope="col">CEP</th>
                        <th scope="col">Política de Privacidade</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- DESAFIO: INCLUA CADA UM DOS CAMPOS UTILIZANDO O QUE JÁ APRENDEMOS EM PHP -->
                    
                    <tr>
                    <th scope="row"><?= $nome; ?></th>
                    <td><?= $email; ?></td>
                    <td><?= $senha; ?></td>
                    <td colspan="2"><?= $endereco; ?></td>
                    <td><?= $cidade; ?></td>
                    <td><?= $estado; ?></td>
                    <td><?= $cep; ?></td>
                    <td><?= $aceitou == "on" ? "aceitou" : "não aceitou" ; ?></td>
                    </tr>
                </tbody>
                </table>
            </article>

        <?php else: ?>
        
            <article class="alert alert-warning col-6 mx-auto" role="alert">
                <p><b>Ops... parece que nenhum dado foi recebido!</b></p>
                <p>Por favor, preencha o formulário <a href="11-metodo-get.php" title="Acessar o Formulário GET" rel="next">GET</a> ou o formulário <a href="11-metodo-post.php" title="Acessar o Formulário POST" rel="next">POST</a>.</p>
                <p>Se você acabou de preencher o formulário, foi direcionado para essa página e está vendo essa mensagem...<br/>deve ter algum erro no seu código! Nesse caso... bora debugar! hehehe</p>
            </article>

        <?php endif; ?>
    </main>
   <?php require_once("./inc/footer.php"); ?>
</body>
</html>