<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Index</title>
    </head>
    <body>
        <?php 
            if(isset($_POST['enviar'])){
                $fPerm = array("png", "jpg", "jpeg", "gif");
                $qntF = count($_FILES['arquivo']['name']);
                $count = 0;
                while($cont < $qntF){
                    $ext = pathinfo($_FILES['arquivo']['name']['$count'], PATHINFO_EXTENSION);
                    if(in_array($ext,$fPerm)){
                        $pasta = "arquivos/";
                        $tempora = $_FILES['arquivo']['tmp_name'][$cont];
                        $nNome = uniqid().".$ext";
                        if(move_uploaded_file($tempora, $pasta.$nNome)){
                            echo "Upload concluído";
                        }
                        else{
                            echo "Formato inválido";
                        } 
                    }
                    $count++;
                }
            }
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <input type="file" name="arquivo[]" multiple/>
            <input type="submit" name="enviar"/> 
        </form>
    </body>
</html>