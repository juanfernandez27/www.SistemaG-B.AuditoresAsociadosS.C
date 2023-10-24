<?php

define("APP_NAME","SISTEMA G&B");

define("SERVIDOR","localhost");
define("USUARIO","root");
define("PASSWORD","");
define("BD","sistemagyb");

$servidor = "mysql:dbname" .BD.";host=".SERVIDOR;

try {
    $pdo = new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    echo "conexion exitosa con la base de datos";

}catch (PDOException $e){
    //print_r($e);
    echo "error no se pudo conectar a la base de datos";

}

$URL = "http://localhost/www.SistemaG&B.AuditoresAsociadosS.C";
