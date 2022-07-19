<?php 
include "conexion.php";

$db= new conexion();
$db->conectar();


?>


<!DOCTYPE html>
<html style="font-size: 16px;" lang="es-CL">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Inicio</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Inicio.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.14.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo+Black:400">


    <script type="application/ld+json">{
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "sinnergym"
    }</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Inicio">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="u-body u-xl-mode" data-lang="es">
    <header class="u-clearfix u-custom-color-1 u-header u-sticky u-header" id="sec-a5f6">
        <div class="u-align-left u-clearfix u-sheet u-sheet-1">
            <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
                <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;">
                    <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                        href="#">
                        <svg class="u-svg-link" viewBox="0 0 24 24">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-018a"></use>
                        </svg>
                        <svg class="u-svg-content" version="1.1" id="svg-018a" viewBox="0 0 16 16" x="0px" y="0px"
                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <rect y="1" width="16" height="2"></rect>
                                <rect y="7" width="16" height="2"></rect>
                                <rect y="13" width="16" height="2"></rect>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="u-custom-menu u-nav-container">
                    <ul class="u-nav u-spacing-20 u-unstyled u-nav-1">
                        <li class="u-nav-item"><a
                            class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-1-base u-text-custom-color-3 u-text-hover-palette-2-base"
                            href="horario.html" style="padding: 10px;">Horario</a>
                        </li>
                        <li class="u-nav-item"><a
                                class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-1-base u-text-custom-color-3 u-text-hover-palette-2-base"
                                href="Acerca-de.html" style="padding: 10px;">Acerca de</a>
                            <div class="u-nav-popup">
                                <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10">
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-white"
                                            href="Planes.html" target="_blank">Planes</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="u-nav-item"><a
                                class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-1-base u-text-custom-color-3 u-text-hover-palette-2-base"
                                href="login.html" style="padding: 10px;">login</a>
                                <div class="u-nav-popup">
                                    <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10">
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-white"
                                            href="loginA.html" target="_blank">Login Admin</a>
                                        </li>
                                    </ul>
                                </div>
                        </li>
                        <li class="u-nav-item"><a
                                class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-1-base u-text-custom-color-3 u-text-hover-palette-2-base"
                                href="#" data-page-id="930005967"
                                style="padding: 10px;">Inicio</a>
                        </li>
                        <li class="u-nav-item"><a
                                class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-1-base u-text-custom-color-3 u-text-hover-palette-2-base"
                                href="Registrar.html" target="_blank" style="padding: 10px;">Registrar</a>
                        </li>
                    </ul>
                </div>
                <div class="u-custom-menu u-nav-container-collapse">
                    <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-inner-container-layout u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Acerca-de.html">Acerca
                                        de</a>
                                    <div class="u-nav-popup">
                                        <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10">
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                    href="Planes.html" target="_blank">Planes</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">login</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="Inicio.html" data-page-id="930005967">Inicio</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Registrar.html"
                                        target="_blank">Registrar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
        </div>
    </header>

    <?php

    $sql="SELECT * FROM `usuarios` WHERE  idusuario='".$_POST['rut']."' and clave='".$_POST['password']."'";
     

   $datos=$db->consulta($sql);   // --- ejecutar un sql ----
    $cont=0;
    while($row = $db->fetch_array($datos)){   //  -- recupera el ultimo registro disponible en arreglo ---
?>
    <br>
    USUARIO = <?php echo $row[2]; ?>
    




<?php     
    } 

   $sql=" select idusuario,nombre from usuarios";
 //   crear_select("listausuarios","LISTADO DE USUARIOS",$sql,3,"N");  //  nombre del campo:listausuarios ; titulo:LISTADO DE USUARIOS; sql:consulta sql ; posicion preseleccionada:0;Todos preseleccionados?:N(no)

 $datos=$db->consulta($sql);   // --- ejecutar un sql ----





?>
 
<div class="col-12  text-center">


<table class="table table-dark">
    <tr >
        <th >ID USUARIO</th>
        <th>NOMBRE</th>
    </tr>
<?php
        while($row = $db->fetch_array($datos)){   //  -- recupera el ultimo registro disponible en arreglo ---
?>
    <tr>
        <td><?php echo $row[0];?></td>
        <td><?php echo $row[1];?></td>
    </tr>
    <?php
        }

?>

</table>

</div>
    


    <section class="u-clearfix u-section-1" id="carousel_bebf">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-layout-row">
                    <div class="u-container-style u-custom-color-2 u-layout-cell u-size-30 u-layout-cell-1">
                        <div class="u-container-layout u-valign-top u-container-layout-1">
                            <p class="u-custom-font u-heading-font u-text u-text-1">¿Quieres tener una mejor condición
                                fisica?, ¿No sabes como bajar de peso?, ¿Quieres parecerte a tu super heroe favorito?,
                                no lo
                                pienses más, ven a entrenar con nosotros, acá hay un agradable ambiente, tenemos las
                                mejores
                                herramientas para ayudar en tú crecimiento, entrena con nosotros esté mes y notaras la
                                diferencia.</p>
                            <a href="Registrar.html" data-page-id="282272528"
                                class="u-active-white u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-button-style u-hover-white u-none u-text-active-white u-text-body-alt-color u-text-hover-black u-btn-1">Registrate</a>
                        </div>
                    </div>
                    <div class="u-container-style u-image u-layout-cell u-size-30 u-image-1" data-image-width="1200"
                        data-image-height="1077">
                        <div class="u-container-layout u-valign-bottom u-container-layout-2"></div>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="u-custom-font u-text u-text-body-alt-color u-text-2">Siner Gym</h1>
    </section>
    <section class="u-align-center u-clearfix u-custom-color-1 u-section-2" id="carousel_9475">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-text u-text-1">Sobre el gimnasio</h1>
            <h5 class="u-text u-text-2">No te rindas.<br>El inicio siempre es la parte más dificil
            </h5>
            <p class="u-text u-text-3">Hemos transformado todos los aspectos de nuestro gimnasio para abarcar a las
                necesidades de cada persona, que quiera incorporarse a nuestro santuario de superacion
                personal.<br>Donde
                nos cetramos en vuestras metas, de lo que quieren conseguir con los entrenamientos.<br>Actualmente el
                aforo
                por hora es de 20 personas.
            </p>
            <div class="u-custom-color-2 u-expanded-width u-shape u-shape-rectangle u-shape-1"></div>
            <div class="u-clearfix u-gutter-30 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-image u-layout-cell u-left-cell u-size-20 u-image-1"
                            data-image-width="626" data-image-height="939">
                            <div class="u-container-layout u-container-layout-1"></div>
                        </div>
                        <div class="u-container-style u-image u-layout-cell u-size-20 u-image-2" data-image-width="626"
                            data-image-height="939">
                            <div class="u-container-layout u-container-layout-2"></div>
                        </div>
                        <div class="u-align-center u-container-style u-image u-layout-cell u-right-cell u-size-20 u-image-3"
                            data-image-width="626" data-image-height="939">
                            <div class="u-container-layout u-valign-middle u-container-layout-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-image u-section-3" id="carousel_7eb9" data-image-width="1980"
        data-image-height="1076">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-expanded-width u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div
                        class="u-align-left u-container-style u-custom-color-1 u-list-item u-repeater-item u-list-item-1">
                        <div class="u-container-layout u-similar-container u-container-layout-1"><span
                                class="u-icon u-icon-circle u-text-palette-2-base u-white u-icon-1"><svg
                                    class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512">
                                </svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-9e9a"
                                    style="enable-background:new 0 0 512 512;">
                                    <g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M387.568,97.168l12.912-27.552C410.669,47.82,415.966,24.06,416,0h-32c-0.03,19.353-4.289,38.466-12.48,56l-13.44,28.656     l-0.848,2.208c-11.903,39.662-10.9,82.08,2.864,121.136H151.904c13.76-39.051,14.763-81.463,2.864-121.12L140.48,56     C132.289,38.466,128.03,19.353,128,0H96c0.034,24.06,5.331,47.82,15.52,69.616l12.912,27.552     c11.72,39.814,7.877,82.593-10.752,119.68C83.582,283.107,66.706,354.604,64,427.328V512h32v-84.672     c0.846-32.501,5.137-64.82,12.8-96.416l99.2,61.952V512h32V400h32v112h32V392.864l99.2-61.952     c7.663,31.596,11.954,63.915,12.8,96.416V512h32v-84.672c-2.681-72.719-19.529-144.216-49.6-210.48     C379.744,179.771,375.872,136.992,387.568,97.168z M283.424,368h-54.848l-111.328-69.584c5.58-19.938,12.557-39.458,20.88-58.416     h235.744c8.296,18.96,15.246,38.48,20.8,58.416L283.424,368z">
                                                </path>
                                                <rect x="240" y="144" width="32" height="32"></rect>
                                                <polygon
                                                    points="53.888,160 104,160 104,128 53.888,128 69.312,104.88 42.688,87.12 4.768,144 42.688,200.88 69.312,183.12         ">
                                                </polygon>
                                                <polygon
                                                    points="469.312,87.12 442.688,104.88 458.112,128 408,128 408,160 458.112,160 442.688,183.12 469.312,200.88      507.232,144    ">
                                                </polygon>
                                            </g>
                                        </g>
                                    </g>
                                </svg></span>
                            <h5 class="u-text u-text-1">Pierde Peso</h5>
                            <p class="u-text u-text-2">Puedes venir con tu propia rutina o simplemente ocupar la que el
                                entrenador te facilite.</p>
                        </div>
                    </div>
                    <div
                        class="u-align-left u-container-style u-custom-color-1 u-list-item u-repeater-item u-list-item-2">
                        <div class="u-container-layout u-similar-container u-container-layout-2"><span
                                class="u-icon u-icon-circle u-text-palette-2-base u-white u-icon-2"><svg
                                    class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 508.16 508.16">
                                </svg><svg class="u-svg-content" viewBox="0 0 508.16 508.16" id="svg-07f2">
                                    <g>
                                        <path
                                            d="m434.393 318.198-42.427 42.426-21.213-21.213 19.393-19.394c17.546-17.546 17.546-46.094 0-63.64-8.143-8.144-18.657-12.501-29.341-13.085-1.244-22.751-19.362-41.208-42.429-42.451-.589-10.675-4.946-21.18-13.082-29.316h-.001c-8.143-8.145-18.657-12.502-29.341-13.086-.584-10.684-4.942-21.197-13.086-29.341-17.545-17.545-46.095-17.545-63.639 0l-19.394 19.394-42.426-42.427 42.426-42.426-63.639-63.639-106.066 106.065 63.64 63.64 42.427-42.427 42.426 42.427-21.214 21.213c-11.721-11.722-30.702-11.727-42.426.001l-31.82 31.819c-31.753 31.754-28.338 77.273-26.298 104.471.167 2.234.325 4.33.447 6.232l-26.227 26.227 148.493 148.492 37.162-37.161c21.533-.605 47.308-4.882 67.949-25.522l84.854-84.853 21.213 21.213-42.427 42.427 63.64 63.64 106.066-106.066zm-360.625-190.919-21.213-21.214 63.64-63.64 21.213 21.214zm231.526 107.885c5.863-5.863 15.35-5.862 21.213 0 5.849 5.849 5.849 15.365 0 21.214l-61.821 61.819c-5.863 5.862-15.349 5.862-21.212 0h-.001c-5.862-5.861-5.862-15.35 0-21.213zm-21.214-42.426c5.848 5.849 5.848 15.364 0 21.213l-61.821 61.82c-5.17 5.17-13.011 5.689-18.699 2.028.308-7.077-1.06-14.537-4.338-21.418l63.644-63.644c5.849-5.846 15.366-5.846 21.214.001zm-63.639-42.427c5.849-5.849 15.365-5.847 21.213 0 5.849 5.849 5.849 15.365 0 21.214l-61.82 61.819c-1.867-1.867-15.91-15.909-21.213-21.213zm23.033 273.953c-11.79 11.789-27.65 16.819-53.033 16.819h-6.213l-24.651 24.651-106.067-106.066 14.044-14.043v-6.214c0-21.018-10.271-68.368 16.82-95.46l31.819-31.819 53.036 53.034c5.725 5.731 5.936 15.274-.002 21.212-5.849 5.848-15.365 5.848-21.214 0l-31.819-31.819-21.213 21.213 31.819 31.819c18.092 18.095 48.008 17.572 65.374-1.841 5.269 2.534 11.015 4.018 16.979 4.342 1.246 22.873 19.55 41.193 42.45 42.428.914 16.557 10.769 31.076 25.514 38.1zm63.639-63.64c-5.848 5.848-15.364 5.849-21.213 0s-5.849-15.365 0-21.214l61.82-61.819c5.849-5.848 15.364-5.848 21.213 0 5.849 5.849 5.849 15.365 0 21.214zm63.64 63.64 63.64-63.64 21.213 21.213-63.64 63.641z">
                                        </path>
                                    </g>
                                </svg></span>
                            <h5 class="u-text u-text-3">Entrenando</h5>
                            <p class="u-text u-text-4">Obtendras grandes logros en poco tiempo en este gimnasio, todos
                                se
                                ayudan y logran sus metas.</p>
                        </div>
                    </div>
                    <div
                        class="u-align-left u-container-style u-custom-color-1 u-list-item u-repeater-item u-list-item-3">
                        <div class="u-container-layout u-similar-container u-container-layout-3"><span
                                class="u-icon u-icon-circle u-text-palette-2-base u-white u-icon-3"><svg
                                    class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 510 510">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-ab38"></use>
                                </svg><svg class="u-svg-content" viewBox="0 0 510 510" id="svg-ab38">
                                    <g>
                                        <path
                                            d="m405.78 190.426 19.938-46.996c29.847-70.354-22.686-143.43-96.662-143.43h-148.107c-35.323 0-68.053 17.584-87.552 47.038-19.5 29.454-22.905 66.452-9.109 98.97l19.887 44.77c-83.904 76.094-95.083 195.671-41.359 283.7 13.372 21.91 37.809 35.522 63.772 35.522h256.822c26.023 0 50.544-13.746 63.991-35.872 21.328-35.088 32.602-75.444 32.602-116.707 0-62.344-25.397-122.81-74.223-166.995zm-293.921-56.245c-9.948-23.544-7.562-49.263 6.553-70.583 14.136-21.352 36.93-33.598 62.537-33.598h148.107c53.352 0 90.169 51.917 69.044 101.713l-16.743 39.467c-8.068-5.496-16.462-10.427-25.123-14.797 1.739-3.918-5.91 13.314 15.06-33.92 5.865-13.929 4.376-29.762-3.984-42.354-8.361-12.591-22.376-20.109-37.49-20.109h-149.635c-15.114 0-29.129 7.518-37.489 20.109s-9.85 28.424-3.984 42.354l15.118 34.054c-8.739 4.434-17.217 9.442-25.371 15.033zm69.579 10.592-15.124-34.063c-1.93-4.682-1.432-9.781 1.374-14.007 2.829-4.26 7.384-6.703 12.497-6.703h149.635c10.714 0 17.938 10.84 13.872 20.709l-15.091 33.983c-22.274-7.687-45.856-11.868-70.056-12.242-26.619-.418-52.626 3.819-77.107 12.323zm240.327 313.774c-8.042 13.233-22.739 21.453-38.355 21.453h-256.822c-15.578 0-30.202-8.105-38.165-21.151-45.298-74.223-37.45-174.634 30.68-240.962 37.48-36.487 86.779-56.237 138.981-55.441 105.825 1.636 191.92 89.102 191.92 194.976-.001 35.765-9.765 70.733-28.239 101.125z">
                                        </path>
                                        <path
                                            d="m255.003 192.421c-74.439 0-135 60.561-135 135s60.561 135 135 135 135-60.561 135-135-60.561-135-135-135zm0 240c-57.898 0-105-47.103-105-105s47.102-105 105-105 105 47.103 105 105-47.103 105-105 105z">
                                        </path>
                                        <path
                                            d="m255.003 252.421c-24.814 0-45 20.187-45 45.001 0 11.517 4.354 22.032 11.495 30-7.142 7.967-11.495 18.483-11.495 30 0 24.813 20.186 44.999 45 44.999s45-20.187 45-45c0-11.517-4.354-22.032-11.495-30 7.142-7.968 11.495-18.483 11.495-30 0-24.813-20.187-45-45-45zm0 30c8.271 0 15 6.729 15 15.001 0 8.271-6.729 14.999-15 14.999s-15-6.729-15-15 6.728-15 15-15zm0 90c-8.271 0-15-6.729-15-15s6.729-15 15-15 15 6.729 15 15.001c0 8.27-6.729 14.999-15 14.999z">
                                        </path>
                                    </g>
                                </svg></span>
                            <h5 class="u-text u-text-5">Nuestro equipo</h5>
                            <p class="u-text u-text-6">Está capacitado para enfrentar diversas adversidades, lesiones y
                                objetivos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-e14f">
        <div class="u-align-left u-clearfix u-sheet u-sheet-1"></div>
    </footer>
    <span
        style="height: 64px; width: 64px; margin-left: 0px; margin-right: auto; margin-top: 0px; background-image: none; right: 20px; bottom: 20px; padding: 14px;"
        class="u-back-to-top u-icon u-icon-circle u-opacity u-opacity-85 u-palette-1-base" data-href="#">
        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 551.13 551.13">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1d98"></use>
        </svg>
        <svg class="u-svg-content" enable-background="new 0 0 551.13 551.13" viewBox="0 0 551.13 551.13"
            xmlns="http://www.w3.org/2000/svg" id="svg-1d98">
            <path d="m275.565 189.451 223.897 223.897h51.668l-275.565-275.565-275.565 275.565h51.668z"></path>
        </svg>
    </span>

</body>

</html>

