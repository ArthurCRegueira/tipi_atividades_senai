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
                function soma(){
                    
                    $p = func_get_arg();
                    $t = func_num_args();
                    $s = 0;
                    for ($index = 0; i <= $t; $index++){
                        $s += $p[$index];
                    }
                }
                soma(4,7,98,9);
                echo $s;
            ?>
        </div>
    </body>
</html>