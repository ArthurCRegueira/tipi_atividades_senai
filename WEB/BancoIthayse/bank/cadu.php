<?php
    include "config.php"
?>
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
        <nav class="navbar fixed-top fluid navbar-dark bg-primary">
            <h1>BI</h1>
            <span class="navbar-text">
                Abra sua conta!
            </span>
        </nav>
            <div class="login container-fluid" >
            <form method="POST" action="?go=cadastrar">
            <table class="table">
                <h2>Cadastre-se</h2>
                    <tr>
                        <th>
                            <label for="nome">Nome</label>
                        </th>
                        <th>
                            <input type="text" id="nome" name="nome" maxlength="10" placeholder="Apenas o primeiro nome" required/>
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
                        <th>
                            <label for="cpf">CPF</label>
                        </th>
                        <th>
                            <input type="number" id="cpf" name="cpf" max="99999999999999" min="00000000000000"/>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <label for="mail">E-mail</label>
                        </th>
                        <th>
                            <input type="email" id="email" name="email" required/>
                        </th>
                    </tr>
                    <th><input type="submit" class="btn btn-primary" value="Cadastro"/></th>
                </table>
            </form> 
    </div>
    <script src="jquery-3.5.1.slim.min.js"></script>
    <script src="popper.min.js" ></script>
    <script src="bootstrap.min.js"></script>
    </body>
</html>
<?php
    if(@$_GET['go'] == 'cadastrar'){ 
        $nome  = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $cpf = $_POST['cpf'];
            mysqli_query("insert into pessoas((`nome`, `email`, `cpf`, senha") values ('$nome', '$email', '$cpf', '$senha')");
            echo "usuário cadastrado com sucesso!";
    }
?>