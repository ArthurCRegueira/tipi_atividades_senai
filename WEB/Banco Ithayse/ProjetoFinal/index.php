<?php 
    require_once './include/header.php';
    require_once './include/db_connect.php';
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
<div class="login">
    <h2>Faça Login</h2>
    <?php 
            if(!empty($erros)){
                foreach ($erros as $erro){
                    echo $erro;
                }
            }
    ?>
    <form method="POST">
    <div class="form-group">
        <label for="login">Usuário</label>
        <input type="text" class="form-control-lg" id="login" name="login"/>
    </div>
    <div class="form-group">
        <label for="senha">Password</label>
        <input type="password" class="form-control-lg" id="senha" name="senha"/>
    </div>
    <button type="submit" class="btn btn-primary" name="btn">Entrar</button>
    </form>
</div>
<div class="cad">
<?php 
            if(!empty($erros)){
                foreach ($erros as $erro){
                    echo $erro;
                }
            }
        ?>
    <h2>Faça parte da nossa história</h2>

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <div class="form-group">
        <label for="login">Usuário</label>
        <input type="text" class="form-control-lg" id="loginC" name="login"/>
    </div>
    <div class="form-group">
        <label for="senha">Password</label>
        <input type="password" class="form-control-lg" id="senhaC" name="senha"/>
    </div>
    <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</div>
<?php 
    include_once './include/footer.php';
?>