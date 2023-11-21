<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docentes UPSLP</title>
    <link rel="shortcut icon" href="../media/logo-UPSLP.png">
    <!-- Box icons template -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Hoja de estilos CSS -->
    <link rel="stylesheet" href="../style/docentes.css">
</head>

<body>
    <div class="wrapper">
        <aside>
            <header>
                <img src="../media/logo-UPSLP.png" alt="logo">
                <h1 class="logo">Administrador</h1>
            </header>
            <i class='bx bx-menu' id="menu-box"></i>
            <nav class="navbar active">
                <ul class="menu">
                    <li>
                        <button class="boton-menu active"><i class='bx bx-user'></i> Avance</button>
                    </li>
                    <li>
                        <button class="boton-menu"><i class='bx bx-bar-chart-alt-2'></i> Estadisticas</button>
                    </li>
                    <li>
                        <a class="boton-cerrar-sesion" href="log-in.html"><i class='bx bx-power-off'></i> Cerrar
                            sesion</a>
                    </li>
                </ul>
            </nav>

            <footer>
                <p class="footer">Urbano Villalón num.500, Col. La Ladrillera, San Luis Potosí, S.L.P. México, C.P.
                    78363 Conmutador: (444) 870 - 21 - 00 Atención Politécnica: politecnica@upslp.edu.mx</p>
            </footer>
        </aside>
        <main class="main active">
            <div class="contenedor-avance active">
                <h2 class="titulo-principal">Avance</h2>
                <div class="contenido-principal">
                    <nav class="opciones">
                        <ul class="menu-secundario">
                            <li>
                                <button class="boton-menu-secundario"><i class='bx bx-id-card'></i> Buscar</button>
                            </li>
                            <li>
                                <button class="boton-menu-secundario"><i class='bx bx-printer'></i> Imprimir</button>
                            </li>

                        </ul>
                    </nav>
                    <div class="contenido-secundario active">
                        <caption style="margin: 1rem;">
                            <form action="#">
                                <div class="input-box">
                                    <input type="number" placeholder="Matricula" required>
                                    <button class="boton-contenido-secundario">Buscar <i
                                            class='bx bx-search-alt-2'></i></button>
                                </div>
                            </form>
                        </caption>
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
                        <table>

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
                    <div class="contenido-secundario ">
                        <table>
                            <thead>
                                <tr>
                                    <th>Descargar Kardex alumno</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <form action="#">
                                            <div class="input-box">
                                                <input type="number" placeholder="Matricula" required>
                                                <button class="boton-contenido-secundario">Buscar <i
                                                        class='bx bx-search-alt-2'></i></button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class='bx bx-printer'></i> Descargar PDF
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="contenedor-avance">
                <h2 class="titulo-principal">Estadisticas</h2>
                <div class="contenido-principal">
                    <nav class="opciones">
                        <ul class="menu-secundario">
                            <li>
                                <button class="boton-menu-secundario"><i class='bx bx-stats'></i> Mostrar
                                    estadisticas</button>
                            </li>
                        </ul>
                        <div class="buscar-alumno">
                            <form action="#">
                                <div class="input-box">
                                    <input type="number" placeholder="Matricula" required>
                                    <button class="boton-contenido-secundario">Buscar <i
                                            class='bx bx-search-alt-2'></i></button>
                                </div>
                            </form>
                        </div>
                    </nav>
                    <div class="contenido-secundario active">
                        <div class="usuario-info">
                            <aside>
                                <img src="media/user-icon.jpg" alt="user-default">
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
                </div>
            </div>
        </main>

    </div>
    <div class="ayuda">
        <button class="boton-ayuda" onclick="location.href='FAQS.html'">
            <i class='bx bx-help-circle'></i>
        </button>
    </div>

    <script src="../script/docentes.js"></script>
</body>

</html>