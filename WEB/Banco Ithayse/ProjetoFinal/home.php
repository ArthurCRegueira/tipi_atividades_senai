<?php
    require_once './include/db_connect.php';
    require_once './include/header.php';
    session_start();
    if(!isset($_SESSION['logado'])){
        header('Location: index.php');
    }
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM  usuarios WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
    mysqli_close($connect);
?>

    <div class="cont-main">
        <h1>Olá <?php echo $dados['nome'];?></h1>
      
    </div>
<?php
    require_once './include/footer.php';
?>