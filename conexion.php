<?php 
    $host="ftp.clubmovistar.com.mx"; 
    $basedatos="clubmovi_especialista";
    $usuario = "clubmovi_espec";
    $password = "mandarina2015";
    $puerto = "3306";

    try{
        $bd = new PDO("mysql:host=".$host.";dbname=".$basedatos.";port=".$puerto,$usuario,$password);
        
        $bd -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
       // echo "<br>Conexion realizada con exito!!!";
        
    }catch(PDOException $e){
        
        echo "<br> Ocurrio un error ->".$e->getMessage();
        
    }
?>