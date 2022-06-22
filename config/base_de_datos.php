<?php

$SERVER="localhost";
$DB="Northwind";
$USER="postgres";
$PASS="postgres";

    try{
        $conexion = new PDO("pgsql:host= $SERVER; dbname=$DB", $USER, $PASS);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch( PDOException $exp){
        echo "No se pudo conectar a la base de datos", $exp->getMessage();
    }


