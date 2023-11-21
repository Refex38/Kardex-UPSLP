<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes UPSLP</title>
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
                    <li>
                        <button id="consulta" class="boton-menu active"><i class='bx bx-bar-chart-alt-2'></i> Consulta mi avance</button>
                    </li>
                    <li>
                        <button id="imprime" class="boton-menu"><i class='bx bx-printer'></i> Imprime mi avance</button>
                    </li>
                    <li>
                        <a class="boton-cerrar-sesion" href="log-in.html"><i class='bx bx-power-off'></i> Cerrar sesion</a>
                    </li>
                </ul>
            </nav>

            <footer>
                <p class="footer">Urbano Villalón num.500, Col. La Ladrillera, San Luis Potosí, S.L.P. México, C.P. 78363 Conmutador: (444) 870 - 21 - 00 Atención Politécnica: politecnica@upslp.edu.mx</p>
            </footer>
        </aside>
        <main class="main active">
            <div class="contenedor-avance active">
                <h2 class="titulo-principal">Mi avance</h2>
                <div class="usuario-info">
                    <aside>
                        <img src="../media/user-icon.jpg" alt="user-default">
                    </aside>
                    <main>
                        <h4><span>Alumno:</span> Rafael López Lara</h4>
                        <p><span>Matricula: </span>182239</p>
                        <p><span>Semestre: </span>3</p>
                    </main>
                </div>
                
                <table class="info-alumno">
                    <thead>
                        <tr>
                            <th>Materia cursada</th>
                            <th>No. veces cursada</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Int Matematicas</td>
                            <td>1</td>

                        </tr>
                        <tr>
                            <td>Int Fisíca</td>
                            <td>1</td>

                        </tr>
                        <tr>
                            <td>Ingles KET Intro</td>
                            <td>1</td>

                        </tr>
                        <tr>
                            <td>Ingles KET Intro</td>
                            <td>1</td>
                            
                        </tr>
                    </tbody>
                </table>
                <table>
                    <thead>
                        <tr>
                            <th>Materias actuales</th>
                            <th>Materias siguiente semestre</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ingles-PET II</td>
                            <td>Ingles FCE I</td>
                        </tr>
                        <tr>
                            <td>Ingles-PET II</td>
                            <td>Ingles FCE I</td>
                        </tr>
                        <tr>
                            <td>Fisica 2</td>
                            <td>Fisica 3</td>
                        </tr>
                        <tr>
                            <td>Matematicas 2</td>
                            <td>Matematicas 3</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="contenedor-avance">
                <h2 class="titulo-principal">Imprime mi avance</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Descargar Kardex</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <i class='bx bx-printer'></i> Descargar PDF
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
        
    </div>
    <div class="ayuda">
        <button class="boton-ayuda" onclick="location.href='FAQS.html'">
            <i class='bx bx-help-circle' ></i>
        </button>
    </div>
    <script src="../script/estudiantes.js"></script>
</body>
</html>