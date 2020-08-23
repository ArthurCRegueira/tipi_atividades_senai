<meta charset="UTF-8"/>
<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'arthur');
define('SENHA', 'password');
define('DB', 'bi');
try{
    $con = new PDO("mysql:dbname=bi; host=localhost", "arthur", "password");
} catch(PDOException $e){
    echo "Não foi possível conectar a DB por: $e";
}
catch (Exception $e){
    echo"Se vire $e";
}

?>