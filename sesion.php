<?php
    
    if(isset($_SESSION["id"])){
        echo "<br/>". '<span class="adrespo">'. "Hola, ".$_SESSION["nombre"]. '</span>';;
    }else{
        header("Location:index.php");
    }

?>

