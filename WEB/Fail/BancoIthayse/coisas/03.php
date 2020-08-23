<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Morri</title>
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
                $est = $_GET["estados"];

                switch ($est){
                    case "AC":
                    case "AP":
                    case "AM":
                    case "PA":
                    case "RO":
                    case "RR":
                    case "TO":
                            echo "Região Norte";
                            break;
                    case "AL":
                    case "BA":
                    case "CE":
                    case "MA":
                    case "SE":
                    case "PB":
                    case "PE":
                    case "PI":
                    case "RN":
                        echo "Região Nordeste";
                        break;
                    case "ES":
                    case "MG":
                    case "SP":
                    case "RJ":
                        echo "Região Sudeste";
                        break;
                    case "PR":
                    case "RS":
                    case "SC":
                        echo "Região Sul";
                        break;
                    case "DF":
                    case "GO":
                    case "MT":
                    case "MS":
                        echo "Região Centro Oeste";
                        break;
                    
                }
            ?>
            <a href="03.html"><button>Voltar</button></a>
        </div>
    </body>
</html>