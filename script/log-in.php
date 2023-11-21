<?php
    include 'database.php';

    $link = null;
    $strUser = "";
    $strPassword = "";

    if(isset($_GET['txtUser'])){
        $strUser = $_GET['txtUser'];
    }
    if(isset($_GET['txtPassword'])){
        $strPassword = $_GET['txtPassword'];
    }

    conectar_db($link);
    
    if($link){
        /*Consultar información*/
        sql_usuarios($link, $query, $strUser);
    
        /* Validar informacion del usuario */
        if(mysqli_num_rows($query) > 0){
            $f = mysqli_fetch_array($query);
            if($f[2] == $strPassword){
                setcookie("UserType", $f[3], time() + 3600, "/");
                setcookie("UserName", $f[1], time() + 3600, "/");
                header('Location: ../html/menu.php');
            }else{
                header('Location: ../index.php?errorCode=2');
            }
        }else{
            header('Location: ../index.php?errorCode=1');
        }
        desconectar_db($link);
    }
?>
    /* To Do:
        *Conectar con el wservidor de base de datos
        *Activar/seleccionar la vbase de datos
        *Consultar la tabla de datos
        *claveInterna, password,
        *Validar información
    */