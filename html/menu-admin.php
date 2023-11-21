<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador UPSLP</title>
    <link rel="shortcut icon" href="../media/logo-UPSLP.png">
    <!-- Box icons template -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Hoja de estilos CSS -->
    <link rel="stylesheet" href="../style/admin.css">
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
                        <button  class="boton-menu active"><i class='bx bx-user'></i> Usuarios</button>
                    </li>
                    <li>
                        <button  class="boton-menu"><i class='bx bxs-book-content'></i> Plan de estudios</button>
                    </li>
                    <li>
                        <button  class="boton-menu"><i class='bx bx-id-card'></i> Kardex</button>
                    </li>
                    <li>
                        <a class="boton-cerrar-sesion" href="../index.php"><i class='bx bx-power-off'></i> Cerrar sesion</a>
                    </li>
                </ul>
            </nav>

            <footer>
                <p class="footer">Urbano Villalón num.500, Col. La Ladrillera, San Luis Potosí, S.L.P. México, C.P. 78363 Conmutador: (444) 870 - 21 - 00 Atención Politécnica: politecnica@upslp.edu.mx</p>
            </footer>
        </aside>
        <main class="main active">
            <div class="contenedor-avance active">
                <h2 class="titulo-principal">Usuarios</h2>
                <div class="contenido-principal">
                    <nav class="opciones">
                        <ul class="menu-secundario">
                            <li>
                                <button class="boton-menu-secundario active"><i class='bx bx-user'></i> Nuevo</button>
                            </li>
                            <li>
                                <button  class="boton-menu-secundario"><i class='bx bxs-book-content'></i> Eliminar</button>
                            </li>
                            <li>
                                <button  class="boton-menu-secundario"><i class='bx bx-id-card'></i> Buscar</button>
                            </li>
                            <li>
                                <button  class="boton-menu-secundario"><i class='bx bx-id-card'></i> Actualizar</button>
                            </li>
                        </ul>
                    </nav>
                    <div class="contenido-secundario active">
                        <table>
                            <thead>
                                <tr>
                                    <th>
                                        Nuevo usuario  <i class='bx bxs-user'></i>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <button class="boton-contenido-secundario">Nuevo <i class='bx bx-plus'></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="contenido-secundario ">
                        <table>
                            <thead>
                                <tr>
                                    <th>
                                        Eliminar usuario  <i class='bx bxs-user-minus'></i>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <form action="#">
                                            <div class="input-box">
                                                <input type="number" placeholder="Usuario a eliminar" 
                                                required>
                                                <button class="boton-contenido-secundario">Eliminar <i class='bx bxs-trash'></i></button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="contenido-secundario ">
                        <table>
                            <thead>
                                <tr>
                                    <th>
                                        Buscar usuario  <i class='bx bxs-user-detail'></i>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <form action="#">
                                            <div class="input-box">
                                                <input type="number" placeholder="Usuario" 
                                                required>
                                                <button class="boton-contenido-secundario">Buscar <i class='bx bx-search-alt'></i></button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="contenido-secundario ">
                        <table>
                            <thead>
                                <tr>
                                    <th>
                                        Actualizar información  <i class='bx bx-refresh'></i>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <button class="boton-contenido-secundario">Actualizar <i class='bx bx-cloud-upload'></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="contenedor-avance">
                <h2 class="titulo-principal">Plan de estudios</h2>
                <div class="contenido-principal">
                    <nav class="opciones">
                        <ul class="menu-secundario">
                            <li>
                                <button class="boton-menu-secundario active"><i class='bx bx-book-add'></i> Nuevo</button>
                            </li>      
                            <li>
                                <button  class="boton-menu-secundario"><i class='bx bx-book'></i> Buscar</button>
                            </li>
                            <li>
                                <button  class="boton-menu-secundario"><i class='bx bx-upload'></i> Cargar</button>
                            </li>
                        </ul>
                    </nav>
                    <div class="contenido-secundario active">
                        <table>
                            <thead>
                                <tr>
                                    <th>
                                        Nueva materia  <i class='bx bx-book-add'></i>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <button class="boton-contenido-secundario">Agregar <i class='bx bx-plus'></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="contenido-secundario ">
                        <table>
                            <thead>
                                <tr>
                                    <th>
                                        Buscar   <i class='bx bx-book'></i>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <form action="#">
                                            <div class="input-box">
                                                <input type="text" placeholder="Materia" 
                                                required>
                                                <button class="boton-contenido-secundario">Buscar materia <i class='bx bx-search-alt-2'></i></button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="contenido-secundario ">
                        <table>
                            <thead>
                                <tr>
                                    <th>
                                        <button id="plan-de-estudios" class="boton-contenido-secundario">Cargar plan de estudios <i class='bx bx-table'></i></button>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <div class="plan-estudio active">
                                        <td>
                                            <p style="color: var(--clr-naranja); font-size: 1.2rem; font-weight: 500;">Plan de estudios</p>
                                        </td>
                                        <td>
                                            <img src="../media/plan-de-estudios.png" alt="plan de estudios ITI">
                                        </td>
                                    </div>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="contenedor-avance">
                <h2 class="titulo-principal">Kardex</h2>
                <nav class="opciones">
                    <ul class="menu-secundario">
                        <li>
                            <button class="boton-menu-secundario active"><i class='bx bxs-credit-card-front'></i> Kardex</button>
                        </li>
                    </ul>
                </nav>
                <div class="contenido-secundario">
                    <table>
                        <thead>
                            <th>
                                Cargar cardex  <i class='bx bxs-credit-card-front'></i>
                            </th>
                        </thead>
                        <tbody>
                            <td>
                                Kardex alumno  
                            </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        
    </div>
    <div class="ayuda">
        <button class="boton-ayuda" onclick="location.href='FAQS.html'">
            <i class='bx bx-help-circle' ></i>
        </button>
    </div>

    <script src="../script/admin.js"></script>
</body>
</html>