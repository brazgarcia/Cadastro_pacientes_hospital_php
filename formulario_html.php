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

                    <label for="complemento">complemento:</label>
                    <input type="text" name="complemento" id="complemento">

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
                <a href="index.php?sair=true">Sair</a>
            </footer>
        </div>
    </body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>