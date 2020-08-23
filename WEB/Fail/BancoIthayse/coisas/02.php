<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Título</title>
        <style>
            body {
                background-color: aqua;
                background-position: 100%;
                background-size: 100%;
                background-attachment: fixed; */
                font-family: arial, sans-serif;
            }

            div {
                padding: 8px;
                position: relative;
                width: 700px;
                height: 500px;
                background-color: #f8f8f8;
                margin: 145px auto 200px auto;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-shadow: 3px 3px 0.3px rgba(0,0,0,.3);
                word-wrap: break-word;
            }
        </style>
    </head>
    <body>
        <div>
            <?php
                $nota1 = $_GET["n1"];
                $nota2 = $_GET["n2"];
                $media = ($nota1 + $nota2)/2;
                if($media < 6){
                echo "A média do aluno foi $media e o aluno foi <p id='red'>Reprovado</p>";
                }else{
                    echo "A média do aluno foi $media e o aluno foi <p id='red'>Aprovado!</p>";
                }
            ?>
            <a href="02.html"><button>Voltar</button></a>
        </div>
    </body>
</html>