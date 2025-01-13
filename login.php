<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

        <title>Login</title>

        <style>
            * {
                margin: 0;
                padding: 0;
            }

            html {
                height: 100%;
            }
            
            body {
                min-height: 100%;
            }
            
            body { background-color: dodgerblue; }

        </style>
        
    </head>

    <body>

        <div id="global" class="d-flex align-items-center">

            <div class="card border border-danger" style="margin: 20px auto">

                <header>
                    <h1>Tela de Acesso</h1>
                </header>

            <div class="card-body">
                
                <main>
                    
                    <form action="autenticador.php" method="post">
    
                        <label for="user">Usuário:</label>
                        <input type="text" name="user" id="user" required>
    
                        <label for="pass">Senha:</label>
                        <input type="password" name="pass" id="pass">
    
                        <button type="reset">Limpar</button>
                        <button type="submit">Entrar</button>
    
    
                    </form> 
                    
                </main>

            </div>
            </div>

            <footer>
                
            </footer>
        </div>
    </body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</html>

