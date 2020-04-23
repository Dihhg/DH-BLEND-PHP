<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 01 - PHP</title>
</head>

<body>
    <?php
    // para criar uma variavel no php basta utilizar $ e o nome da variavel que deseja.
    $titulo = "Primeira aula de PHP";
    ?>

    <h1>
        <?php

        echo $titulo;

        ?>
    </h1>

    <hr>
    <h1>Condicionais</h1>

    <p>IF / ELSE </p>
    <p>Crie uma condição que valide se uma pessoa pode votar ou não. De forma que se a pessoativer a idade
        entre 16 e 17 anos,OU for iremos mostrar na tela Voto Facultativo,caso contrario,se for maior de idade
        mostrar na tela voto obrigatório, e caso for menor de 16 e 17 ou maior 64 não vota</p>

    <?php
    $idadeEleitor = 18;

    if ($idadeEleitor >= 16 && $idadeEleitor < 18 || $idadeEleitor > 70) {
        echo "Voto Facultativo";
    } else if ($idadeEleitor >= 18 && $idadeEleitor <= 70) {
        echo "Voto Obrigatorio";
    } else {
        echo "Não Vota";
    }
    ?>


    <p>Crie uma funçao que valide se uma pessoa pode votar ou não. De forma que se a pessoativer a idade
        entre 16 e 17 anos,OU for iremos mostrar na tela Voto Facultativo,caso contrario,se for maior de idade
        mostrar na tela voto obrigatório, e caso for menor de 16 e 17 ou maior 64 não vota</p>

    <?php
    function podeVotar($idadeEleitor)
    {
        if ($idadeEleitor >= 16 && $idadeEleitor < 18 || $idadeEleitor > 70) {
            return "Voto Facultativo";
        } else if ($idadeEleitor >= 18 && $idadeEleitor <= 70) {
            return "Voto Obrigatorio";
        } else {
            return "Não Vota";
        }
    }
    ?>

    R:Foi criado no código a função podeVoltar e soi informado como parâmetro o valor 17,
    como resultado da função tivemos: <br> <?php echo podeVotar(17) ?>

    <hr>
    <p>SWITCH CASE</p>

    <p>Crie uma função que valide se um número é 0 e retorne que é igual a 0, se é 1 e retorne que é igual a 1,
        ou se é 2 e retorne que é igual a 2.Caso contrario retorne que o numero é maior que 2. Utilizando switch case</p>

    <?php
    function validaNumero($i)
    {
        switch ($i) {
            case 0:
                echo "$i igual 0";
                break;
            case 1:
                echo "$i igual 1";
                break;
            case 2:
                echo "$i igual 2";
                break;
            default:
                echo "qualquer número maior que 2";
                break;
        }
    }
    ?>
    R: foi criado no código a função validaNumero e foi informado como parâmetro o número 2,
    como retorno da função tivemos: <br> <?php echo validaNumero(2) ?>

    <p>Crie uma função que receba o genero de uma pessoa ,onde ela poderá informar Masculino ou Feminino,
        se informar Masculino iremos retornar a mensagem Gênero informado foi masculino,si informar feminino
        iremos retornar a msg Gênero informado foi Feminino ,Caso contrario iremos retornar outros.utilizando Swith case</p>

    <?php
    function validaGenero($x)
    {
        switch ($x) {
            case 'masculino':
                return "x igual masculino";
                break;
            case 'feminino':
                return "x igual feminino";
                break;
            default:
                return "outros";
                break;
        }
    }
    ?>

    R: foi criado no código a função validaGênero e foi informado como parâmetro string feminino como
     retorno da função tivemos: <br> <?php echo validaGenero('feminino') ?>

     <hr>
     <h1>Arrays</h1>

     <p>Array Simples</p>

     <?php 
        //declarando array vazio
        $animais = [];

        $animais = ["Leão","cobra","cachorro","gato"];

        //percorrendo array animais para destrichar o conteudo
        echo "<prev>";
            var_dump($animais);
        echo "</prev>";
     ?>
     
     <p>Array Associativos</p>

     <p>Ocorre quando necessitamos adicionar valores para as posicoes do nosso array</p>

     <?php  
        //o array associativo nos da a possibilidade de atribui valores as nossas pisicoes
        $usuario = [
            "nome" => "diogo",
            "email" => "dihhg35@gmail.com",
            "senha" => "123456"
        ];
        //percorrendo array usuario para destrichar o conteudo
        echo "<prev>";
            var_dump($usuario);
        echo "</prev>";

        //montando frase pegando uma posição do array sem percorrer ele todo
        echo "O nome do usuário é " .  $usuario["nome"];
     ?>

     <p>Array de Array</p>

     <p>Ocorre quando temos um array que dentro dele contém outros elementos , onde, cada elemento possui como valor 
     um novo array relacionado a ele</p>

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

        echo "Nome do usuario1 é: " . $listaUsuario ["Usuario1"]["nome"] . " nome usuario2: " . $listaUsuario["Usuario2"]["nome"];
     ?>






</body>

</html>