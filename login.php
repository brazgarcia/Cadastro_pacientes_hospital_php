<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

        <title>Login</title>
        
    </head>

    <body>
        <div id="global" class="row justify-content-center">
            
            <div class="card" style="width: 18rem;">

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

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</html>

