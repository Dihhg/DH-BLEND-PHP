<?php
$tituloDaPagina = "Métodos | PHP - Aula 02";
require_once("./inc/head.php");
?>

<body>
    <?php require_once("./inc/header.php"); ?>
    <main class="container my-5">,
        Percorra a lista de usuários abaixo através de foreach <br>

        <div class="desafio">

            $listaUsuario =[ <br>
            &nbsp; "Usuario1" =>[<br>
            &nbsp; &nbsp; "nome" => "diogo",<br>
            &nbsp; &nbsp; "email" => "dihhg35@gmail.com",<br>
            &nbsp; &nbsp; "senha" => "123456"<br>
            &nbsp; ],<br>
            &nbsp; "Usuario2" =>[<br>
            &nbsp; &nbsp; "nome" => "Patrick",<br>
            &nbsp; &nbsp; "email" => "patrickchaves@gmail.com",<br>
            &nbsp; &nbsp; "senha" => "123456"<br>
            &nbsp; ],<br>
            ];

        </div>

        <?php 
        $listaUsuario =[
            "Usuario1" =>[
                 "nome" => "diogo",
                 "email" => "dihhg35@gmail.com",
                 "senha" => "123456"
            ],
            "Usuario2" =>[
                "nome" => "Patrick",
                "email" => "patrickchaves@gmail.com",
                "senha" => "123456"
           ],
        ];
        ?>

        <p class="my-5">Tabela listando Usuario a medida que percorre array $listaUsuario</p>

        <table class="table mt-5">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Senha</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listaUsuario as $Usuario ): ?>
                <tr>
                    <td><?= $Usuario["nome"]; ?></td>
                    <td><?= $Usuario["email"]; ?></td>
                    <td><?= $Usuario["senha"]; ?></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                <?php endforeach;?>
            </tbody>
        </table>

    </main>
    <?php require_once("./inc/footer.php"); ?>
</body>
</html>