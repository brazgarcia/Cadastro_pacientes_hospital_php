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
            } -->

            html {
                height: 100%;
            }
            
            body {
                min-height: 100%;
            }
            
            body { background-color: green; }

        </style>
        
    </head>

    <body>

        <div id="global" class="d-flex align-items-center" style="height: 1000px;">

            <div class="card border border-danger" style="margin: 20px auto;">

                <header style="text-align: center" >
                    <h1>Tela de Acesso</h1>
                </header>

            <div class="card-body">
                
                <main>
                    
                    <form action="autenticador.php" method="post">
    
                        <div>
                            <label for="user">Usuário:</label>
                            <input type="text" class="mx-2" name="user" id="user" required>
                        </div>
        
                        <div class="d-flex justify-content-end">
                            <label for="pass">Senha:</label>
                            <input type="password" class="mx-2" name="pass" id="pass">
                        </div>
    
                        <div class="d-flex justify-content-center mt-4"> 
                            <button type="reset" class="btn btn-danger mx-2">Limpar</button>
                            <button type="submit" class="btn btn-success mx-2">Entrar</button>
                        </div>


    
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

