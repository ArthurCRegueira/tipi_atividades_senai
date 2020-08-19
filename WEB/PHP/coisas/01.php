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
                $valor = $_GET["v"];
                $rq = sqrt($valor);
                echo "O valor enviado foi $valor e sua raíz quadrada é ". number_format($rq,2);
            ?>
            <a href="01.html"><button>Voltar</button></a>
        <div>
    </body>
</html>