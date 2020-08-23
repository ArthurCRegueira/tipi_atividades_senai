<?php
    require_once 'db_connect.php';
    session_start();
    if(isset($_POST['btn'])){
        $erros = array();
        $login = mysqli_escape_string($connect, $_POST['login']);
        $senha = mysqli_escape_string($connect, $_POST['senha']);
        if(empty(($login)||($senha))){
            $erros[] = "Todos os campos precisam ser preenchidos." ;
        }else{
            $sql = "SELECT login FROM usuarios WHERE login = '$login'";
            $resultado = mysqli_query($connect, $sql);
            if(mysqli_num_rows($resultado) > 0){
                $senha = sha1($senha);
                $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha' ";
                $resultado = mysqli_query($connect, $sql);
                if(mysqli_num_rows($resultado) == 1){
                    $dados = mysqli_fetch_array($resultado);
                    $_SESSION['logado'] = true;
                    $_SESSION['id'] = $dados['id'];
                    header('Location: home.php');
                }else{
                    $erros[] = "Senha inválida";
                }
            }else{
                $erros[] = "Usuário não cadastrado na base";
            }
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Banco Ithayse</title>
    </head>
    <body>
        <h1>Login Besta</h1>
        <?php 
            if(!empty($erros)){
                foreach ($erros as $erro){
                    echo $erro;
                }
            }
        ?>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="login">Login</label>
            <input type="text" name="login"/>
            <label for="senha">Senha</label>
            <input type="password" name="senha"/><br/>
            <button class="btn" name="btn">Enviar</button>
        </form>
    </body>
</html>
