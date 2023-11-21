<?php
    
    $nivelUsuario = 0;
    $nombreUsuario = '';
    $bandCookie = 0;
    $numCookies = 2;

    if(isset($_COOKIE['UserType'])){
        $nivelUsuario = $_COOKIE['UserType'];
        $bandCookie +=1;
    }
    if(isset($_COOKIE['UserName'])){
        $nombreUsuario = $_COOKIE['UserName'];
        $bandCookie +=1;
    }
    if($bandCookie <> $numCookies){
        header("Location: ../index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio UPSLP</title>
    <link rel="shortcut icon" href="../media/logo-UPSLP.png">
    <!-- Box icons template -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Hoja de estilos CSS -->
    <link rel="stylesheet" href="../style/estudiantes.css">
</head>
<body>
    <div class="wrapper">
        <aside>
            <header>
                <img src="../media/logo-UPSLP.png" alt="logo">
                <h1 class="logo">Estudiantes</h1>
            </header>
            <i class='bx bx-menu' id="menu-box"></i>
            <nav class="navbar active">
                <ul class="menu">
                    <?php
                        if($nivelUsuario == 0){
                            echo "<li><button id='consulta' class='boton-menu' onclick='location.href='menu-admin.php''><i class='bx bx-bar-chart-alt-2'></i> Administrador</button> </li>";
                            header("Location: menu-admin.php");
                        }else if($nivelUsuario == 3){
                            echo "<li><button id='imprime' class='boton-menu' onclick='location.href='menu-estudiantes.php''><i class='bx bx-printer'></i> Estudiantes</button></li>";
                            header("Location: menu-estudiantes.php");
                        }else{
                            echo "<li><button id='imprime' class='boton-menu' onclick='location.href='menu-docentes.php''><i class='bx bx-printer'></i> Docentes</button></li>";
                            header("Location: menu-docentes.php");
                        }
                    ?>
                    <li>
                        <a class="boton-cerrar-sesion" href="../index.php"><i class='bx bx-power-off'></i> Cerrar sesion</a>
                    </li>
                </ul>
            </nav>

            <footer>
                <p class="footer">Urbano Villalón num.500, Col. La Ladrillera, San Luis Potosí, S.L.P. México, C.P. 78363 Conmutador: (444) 870 - 21 - 00 Atención Politécnica: politecnica@upslp.edu.mx</p>
            </footer>
        </aside>
        <main class="main active" style="display: flex; flex-direction: row; align-items: center; justify-content: center; padding: 3rem; min-height: 100vh;" >
            <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%; width: 50%;" >
                <img src="../media/Logo-ISTI-web-2021.png" alt="Logo-ISTI" style="width: 60%; aspect-ratio: 16/9; object-fit: contain;">
                <img src="../media/logo-ITI.jpg" alt="Logo-ITI" style="width: 60%; aspect-ratio: 16/9; object-fit: contain;">
                <img src="../media/Logo-ITEM-web-20-21.png" alt="Logo-ITEM" style="width: 60%; aspect-ratio: 16/9; object-fit: contain;">
            </div>
            <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%; width: 50%;" >
                <img src="../media/logo-ITMA.jpg" alt="Logo-ITMA" style="width: 60%; aspect-ratio: 16/9; object-fit: contain;">
                <img src="../media/logo-LMI.jpg" alt="Logo-LMI" style="width: 60%; aspect-ratio: 16/9; object-fit: contain;">
                <img src="../media/logo-LAG.jpg" alt="Logo-LAG" style="width: 60%; aspect-ratio: 16/9; object-fit: contain;">
            </div>
        </main>
        
    </div>
    <div class="ayuda">
        <button class="boton-ayuda" onclick="location.href='FAQS.html'">
            <i class='bx bx-help-circle' ></i>
        </button>
    </div>
</body>
</html>