<?php

$pdo = new PDO('mysql:host=localhost;dbname=db_topfitness','root','root');
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo -> setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");

try {
    $pdoStatement = $pdo -> query("SELECT id, 'login', senha FROM tb_adm LIMIT 5");

    while($row = $pdoStatement -> fetch(PDO::FETCH_ASSOC)){
        echo "<p>{$row['id']} {$row['login']} {$row['senha']} </p>";
    }

}catch(Exception $e){
    echo "Erro: {$e -> getMessage()}";
}

?>