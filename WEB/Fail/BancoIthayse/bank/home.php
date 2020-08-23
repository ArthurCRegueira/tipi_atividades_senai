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
        <div class="main">
            <nav class="navbar fixed-top  navbar-dark bg-primary">
                <h1>BI</h1>
                <span class="navbar-text">
                    <?php 
                        $saldo = $_POST["s"];
                        if($saldo > 0)
                            echo "<p class='saldopos'>R$ $saldo</p>";
                        else
                            echo "<p class='saldoneg'>R$ $saldo</p>";
                    ?>
                </span>
            </nav>
                <div id="cont"></div>
                <form name="log">
                    <fieldset>
                        <legend>Abra sua conta!</legend>
                    </fieldset>
                </form>
            </div>
            
            <nav class="navbar fixed-bottom navbar-light bg-light">
                <a class="navbar-brand" href="#">Banco Ithayse</a>
            </nav>
        </div>
        <script src="jquery-3.5.1.slim.min.js"></script>
        <script src="popper.min.js" ></script>
        <script src="bootstrap.min.js"></script>
    </body>
</html>