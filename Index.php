<?php

session_start();

    if(!isset($_SESSION["usuario_logado"])) {

        header("Location: login.php");

    }

    if(isset($_GET["sair"])) {

        unset($_SESSION["usuario_logado"]);
        header("Location: login.php");

    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

        <title>Cadastro de pacientes</title>
        
    </head>

    <body>
        <div id="global">
            <header>
                <h1>Cadastro de pacientes</h1>
            </header>

            <main>
                <form action="lista.php" method="post">
                    
                    <label for="Nome:">Nome:</label>
                    <input type="text" name="nome" id="nome" required>

                    <label for="cpf">CPF:</label>
                    <input type="text" name="cpf" id="cpf" required pattern="[0-9">

                    <label for="data_nascimento">Data de nascimento:</label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>

                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email" required>

                    <label for="celular">celular</label>
                    <input type="tel" name="celular" id="celular" pattern="[0-9]{5}-[0-9]{4}" title="Ex: 99999-9999" required>

                    <label for="cep">CEP:</label>
                    <input type="tel" name="cep" id="cep" pattern="[0-9]{2}.[0-9]{3}-[0-9]{3}">

                    <label for="endereco">Endereço:</label>
                    <input type="text" name="endereco" id="endereco" required>

                    <label for="numero">Número:</label>
                    <input type="number" name="numero" id="numero" required>
                    
                    <label for="bairro">Bairro:</label>
                    <input type="text" name="bairro" id="bairro" required>

                    

                    <button type="reset">Limpar</button>
                    <button type="submit">Enviar</button>
                </form>
            
                <a href="index.php?sair=true">sair</a>
            </main>

            <footer>

            </footer>
        </div>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</html>

