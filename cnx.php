<?php

try{
    $serverName="localhost";
    $db = "Compte";
    $user = "root";
    $passwrd = "";
    $connectionString = "mysql:host=$serverName;dbname=$db";
    $cnx = new PDO($connectionString,$user,$passwrd);
}
catch(PDOException $e){
    echo("Prblm de connection".$e->getMessage()."!!!!");
}


function ExecuteNonQuery($pdo,$req){
    return $pdo->exec($req);
}

function ExecuteReader($pdo,$req){
    return $pdo->query($req);
}


/*$host="localhost";
$host_user="root";
$host_psw="";
$host_DB="compte1";

if(!$cnx=mysqli_connect($host,$host_user,$host_psw,$host_DB))
{
    die("failed to connect");
}*/
?>