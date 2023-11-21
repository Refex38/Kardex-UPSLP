<?php
    $errorCode = 0;
    if(isset($_GET['errorCode'])){
        $errorCode = $_GET['errorCode'];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="shortcut icon" href="media/logo-UPSLP.png">
    <!-- Box icons template -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Hoja de estilos CSS -->
    <link rel="stylesheet" href="style/log-in.css">
</head>

<body>
    <header class="logo-header">
        <img src="media/logo_azul_blanco_upslp.jpg" alt="logo-UPSLP">
        <h1>Kardex UPSLP</h1>
    </header>
    <div class="wrapper">
        <form id="form-log-in" method="get" action="script/log-in.php" onsubmit="return validarFormulario()">
            <div class="logo-section">
                <p>"Ciencia, Tecnología y Cultura al Servicio del Ser Humano"</p>
            </div>
            <h1>Inicio de Sesión</h1>
            <div class="input-box">
                <input id="numeroInput" type="number" name="txtUser" placeholder="Usuario" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input id="contraseña" type="password" name="txtPassword" placeholder="Contraseña" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="mostrar-contraseña">
                <a href="#">Olvidé mi contraseña</a>
            </div>
            <?php
                if($errorCode > 0){
                    echo '<h4 class="error-log-in">Contraseña y/o usuario incorrectos</h4><br>';
                }
            ?>
            <button type="submit" class="btn">Iniciar Sesión</button>
        </form>
    </div>
    <script src="script/log-in.js">
    </script>
</body>

</html>