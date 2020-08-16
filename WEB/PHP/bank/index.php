<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link rel="stylesheet" href="bootstrap.min.css"/>
        <link rel="stylesheet" href="frufru.css"/>
        <title>Banco Ithayse</title>
    </head>
    <body >
        <div id="main">
            <nav class="navbar fixed-top  navbar-dark bg-primary">
                <h1>BI</h1>
                <span class="navbar-text" style= "color: bisque; font-weigth: bolder;">
                    O banco do futuro!
                </span>
            </nav>
                <header>
               <h2>Simule sua conta:</h2>
            <div id="login" class=".container-fluid">
                <form method="POST" action="home.php">
                    <table>
                        <td>
                            <label for="conta">Conta</label>
                            <tr><input type="number-format" id="conta" name="conta" maxlength="8" placeholder="Apenas números" required/><br/></tr>
                        </td>
                        <td>
                            <label for="senha">Senha</label>
                            <td><input type="password" id="senha" name="senha"  maxlength="8" placeholder="Apenas números" required/><br/></td>
                        </td>
                            <label for="s">Saldo</label>
                            <td><input type="number" id="s" name="s" max="1200" min="600"/></td>
                        </tr>
                        <input type="submit" class="btn btn-primary" value="Entrar"/>
                    </table>
                </form>
            </div>
                </header>
            <nav class="navbar fixed-bottom navbar-light bg-light">
                <a class="navbar-brand" href="#">Banco Ithayse</a>
            </nav>
        </div>
        <script src="jquery-3.5.1.slim.min.js"></script>
        <script src="popper.min.js" ></script>
        <script src="bootstrap.min.js"></script>
    </body>
</html>