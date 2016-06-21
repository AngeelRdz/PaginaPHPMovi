<?php

    include("conexion.php");

    $us = $_POST["usuario"];
    $password = $_POST["contra"];

    // CONSULTA - SELECT usuario,password FROM tbl_usuarios WHERE usuario = "" and password = ""

    $obj_uspass = $bd->query("SELECT * FROM tbl_usuarios WHERE usuario = '$us' and password = '$password'");

    $resultado_query = $obj_uspass->fetchAll(); //Regresa un arreglo con los resultados de la consulta

    echo "ID: ". $resultado_query[0]["id"];

    if(count($resultado_query)==1){
        header("Location:logout.php");
        session_start();
        
        $_SESSION["id"] = $resultado_query[0]["id"];
        
        $_SESSION["nombre"] = $resultado_query[0]["nombre"];
        
        header("Location:Home.php");
    }else{
        header("Location:index.php?error=1");
    }


?>