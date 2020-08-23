<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link rel="stylesheet" href="bootstrap.min.css"/>
        <link rel="stylesheet" href="frufru.css"/>
        <title>Banco Ithayse</title>
    </head>
    <body>
        <nav class="navbar fixed-top  navbar-dark bg-primary" style="margin-bottom: 30%;">
            <h1>BI</h1>
            <span class="navbar-text" style= "color: bisque; font-weigth: bolder;">
                O banco do futuro!
            </span>
        </nav>
        <div class="login" style="margin-top: 25%;">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Login</th>
                    </tr>
                </thead>
                <form method="POST" action="home.php">
                    <tr>
                        <th>
                            <label for="conta">Conta</label>
                        </th>
                        <th>
                            <input type="number-format" id="conta" name="conta" maxlength="8" placeholder="Apenas números" required/>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <label for="senha">Senha</label>
                        </th>
                        <th>
                            <input type="password" id="senha" name="senha"  maxlength="8" placeholder="Apenas números" required/>
                        </th>
                    </tr>
                    <tr>
                    <th><input type="submit" class="btn btn-primary" value="Entrar"/></th>
                    <th><a href="cadu.php" class="btn btn-primary" >Cadastrar</a></th>
                </form>
            </table> 
        </div>
        <nav class="navbar fixed-bottom navbar-light bg-light">
            <a class="navbar-brand" href="#">Banco Ithayse</a>
            </nav>
        <script src="jquery-3.5.1.slim.min.js"></script>
        <script src="popper.min.js" ></script>
        <script src="bootstrap.min.js"></script>
        </div>
    </body>
</html>