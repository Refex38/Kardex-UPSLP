<?php
    $db = "self_service";

    function conectar_db(&$db_link, $db_server = 'localhost', $db_user = 'root', $db_pass = '', $db_sql = 'mysql'){
        /*establecer enlaze a la base de datos*/
        $db_link = mysqli_connect($db_server, $db_user, $db_pass, $db_sql);
        //Servidor, nombre de usuario, contraseña, base de datos.
        if(!$db_link){
            echo "<h2>MySQL Error!!!</h2>";
            exit;
        }
    }

    function desconectar_db(&$db_link){
        if($db_link){
            mysqli_close($db_link);
        }
    }

    function sql_usuarios(&$db_link, &$query, $strUser){
        mysqli_select_db($db_link, $GLOBALS["db"]);
        $string_query = "SELECT 
                claveAlumno AS 'Id', 
                (CONCAT(nombreAlumno,'(',claveInterna,')')) AS 'usuario', 
                password AS 'Pass', 
                (3) as 'TIPO'
                FROM alumno
            WHERE claveInterna ='$strUser'
            UNION SELECT claveProfesor as 'id', 
                (CONCAT(nombreProfesor,'(',claveInterna,')')) AS 'usuario', 
                password AS 'Pass', 
                (2) AS 'Tipo' 
            FROM profesor 
            WHERE claveInterna ='$strUser'
            UNION SELECT claveUsuario AS 'ID',
                (CONCAT(nombreUsuario,'(',claveInterna,')')) AS 'usuario', 
                passwordUsuario AS 'pass',
                tipoUsuario AS 'tipo'
                FROM usuario 
            WHERE claveUsuario ='$strUser'";
        $query = mysqli_query($db_link, $string_query);
    }
?>