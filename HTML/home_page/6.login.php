
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Cargar iconos de FontAwesome -->
    <script src="https://kit.fontawesome.com/3140323153.js" crossorigin="anonymous"></script>

    <!-- Enlaces a archivos css -->
    <link rel="stylesheet" href="/css/Styles_home_page/Styles_6.login.css">
    <link rel="stylesheet" href="/css/Styles_home_page/1.Styles_global_home_page.css">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/assets/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicons/favicon-16x16.png">

    <title>Iniciar Sesión</title>
</head>

<body>
  
  <!-- ===================== HEADER ===================== -->

  <header>
    <!-- Logotipo principal -->
    <a href="/index.html"><img class="logoprincipal" src="/assets/logos_of_the_site/logo_color.png" alt="Logotipo principal"></a>
    <!-- Botón de menú (solo se muestra en móviles) -->
    <button class="menu-toggle" aria-label="Toggle menu">
        &#9776;
    </button>
    <!-- Barra de navegación -->
    <nav>
        <ul class="menu">
            <div class="colricons">
                <li><i class="fa-solid fa-house"></i><a href="/index.html">INICIO</a></li>
                <li><i class="fa-solid fa-newspaper"></i><a href="/html/home_page/2.public.html">NOTICIAS</a></li>
                <li><i class="fa-solid fa-users"></i><a href="/html/home_page/3.Who_are_we.html">¿QUIENES SOMOS?</a></li>
                <li><i class="fa-regular fa-folder-open"></i><a href="#">PROYECTOS ASOCIADOS</a>
                    <ul>
                        <li><a href="/html/home_page/4.Associated_projects/project-1.html">POZOS Y JAGÜEYES</a></li>
                        <li><a href="/html/home_page/4.Associated_projects/project-2.html">ENERGÍAS FOTOVOLTAICAS</a></li>
                        <li><a href="/html/home_page/4.Associated_projects/project-3.html">HUERTAS COMUNITARIAS</a></li>
                        <li><a href="/html/home_page/4.Associated_projects/project-4.html">ESTUFAS EFICIENTES</a></li>
                        <li><a href="/html/home_page/4.Associated_projects/project-5.html">ARTESANÍAS WAYUU</a></li>
                    </ul>
                </li>
                <li><i class="fa-solid fa-phone"></i><a href="/html/home_page/5.Contact_us.html">CONTÁCTANOS</a></li>
                <li><i class="fa-solid fa-right-to-bracket"></i><a href="/html/home_page/6.login.php">INICIAR SESIÓN</a></li>
            </div>                                   
        </ul>
    </nav>
</header>
    <!-- ===================== MAIN CONTENT ===================== -->

    <div class="contanierlogin">
        <main>
            <div class="wrapper">
                <form action="" method="POST">
                    <h1>INICIAR SESIÓN</h1>
                    <div class="input_box">
                        <input type="text" placeholder="CORREO ELECTRÓNICO" required>
                        <i class="fa-solid fa-user"></i>
                    </div>

                    <div class="input_box">
                        <input type="password" placeholder="CONTRASEÑA" required>
                        <i class="fa-solid fa-lock"></i>
                    </div>

                    <div class="remenmer-forgot">
                        <label><input type="checkbox"> Recordar usuario</label>
                    </div>

                    <div class="icons">
                        <button type="submit" class="btn"><i class="fa-solid fa-right-to-bracket"></i> Iniciar sesión</button>
                    </div>
                </form>
            </div>
        </main>
    </div>

    <!-- ===================== FOOTER ===================== -->

    <footer class="footer">
        <!-- Créditos de desarrollo -->
        <p class="By"><strong>Developed by</strong> | Arnaldo Pushaina</p>
        
        <!-- Derechos reservados -->
        <p class="text">©2024 | Todos los derechos reservados</p>
    </footer>
    
<!-- Enalce a Javascript -->
<script src="/javascript/Script_Home_page/1.Script_Responsive/Scrip_Responsive.js"></script>

</body>
</html>
