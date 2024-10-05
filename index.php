<?php 
    date_default_timezone_set('America/Bogota'); // Establece la zona horaria a Bogotá
    function fecha(){ // Define la función 'fecha'
        $mes = array("", 'enero', // Crea un array con los nombres de los meses
                         'febrero',
                         'abril',
                         'marzo',
                         'mayo',
                         'junio',
                         'julio',
                         'agosto',
                         'septiembre',
                         'octubre',
                         'noviembre',
                         'diciembre');
        return date('d'). " de ". $mes[date('n')]. " de ". date('Y'); // Retorna la fecha en formato "día de mes de año"
    }
?>

<!DOCTYPE html> <!-- Define el tipo de documento como HTML5 -->
<html lang="es"> <!-- Establece el idioma del documento como español -->
<head>
    <meta charset="UTF-8"> <!-- Define la codificación de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configura la vista para dispositivos móviles -->
    <link rel="stylesheet" href="ASSETS/bootstrap/css/bootstrap.css"> <!-- Enlaza el archivo CSS de Bootstrap -->
    <link rel="stylesheet" href="ASSETS/CSS/estilos.css"> <!-- Enlaza el archivo CSS personalizado -->
    <link rel="stylesheet" href="ASSETS/CSS/img.css"> <!-- Enlaza el archivo CSS para imágenes -->
    <title>https://codepen.io/</title> <!-- Define el título de la página -->
</head>
<body>

    <!-- Imagen de carga
    <div class="loader"></div> <!-- Div para mostrar una imagen de carga -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> <!-- Enlaza jQuery -->
    <script type="text/javascript">
        $(window).load(function() { // Al cargar la ventana
            $(".loader").fadeOut("fast"); // Hace que la imagen de carga desaparezca rápidamente
        });
    </script>  -->
    
    <header id="inicio"> <!-- Encabezado de la página -->
        <img src="ASSETS/IMG/Royal.gif" width="250" height="250" alt="Imagen 1"> <!-- Imagen del encabezado -->
        <br><br>  
        <?php echo fecha() ?> <!-- Muestra la fecha actual usando la función 'fecha' -->

    <nav> <!-- Navegación principal -->
        <ul> <!-- Lista de enlaces de navegación -->
            <li><a href="#seccion1">Misión y visión</a></li> <!-- Enlace a la sección de misión y visión -->
            <li><a href="#seccion2">Equipo Team</a></li> <!-- Enlace a la sección del equipo -->
            <li><a href="#seccion3">Servicios</a></li> <!-- Enlace a la sección de servicios -->
            <li><a href="#seccion4">Ubicación</a></li> <!-- Enlace a la sección de ubicación -->
            <li><a href="#seccion5">Contáctenos</a></li> <!-- Enlace a la sección de contacto -->
            <!-- <li><a href="VIEW/01.html">Prueba nuestro juego</a></li>
            <li><a href="VIEW/Gamer/index.html">Prueba este otro juego</a></li> --><br>
            <li><a href="VIEW/login.php">Iniciar Sección</a></li> <!-- Enlace para iniciar sesión -->

        </ul>
    </nav>
    </header>
    <main> <!-- Contenido principal de la página -->
        
    <section id="seccion1"> <!-- Sección de misión y visión -->
        <center>
            <div class="cuadro"> <!-- Cuadro para la misión -->
                <h2>Misión</h2>
                <p>Nuestra misión es proporcionar a nuestros clientes una experiencia de compra en línea conveniente, accesible y satisfactoria, ofreciendo prendas de alta calidad, tendencias actuales y un excelente servicio al cliente. Nos comprometemos a promover la confianza, la comodidad y el estilo personal a través de nuestra plataforma digital, asegurando la satisfacción y fidelidad de nuestros clientes en cada interacción.</p>
            </div>
            <div class="cuadro"> <!-- Cuadro para la visión -->
                <h2>Visión</h2>
                <p>Nuestra visión es convertirnos en la principal opción para compras de moda en línea, siendo reconocidos por nuestra amplia selección de prendas de calidad, servicio al cliente excepcional y una plataforma digital innovadora. Aspiramos a ser líderes en la industria, inspirando confianza y estilo en cada cliente, y expandir nuestra presencia globalmente, manteniendo siempre nuestros valores fundamentales de calidad, accesibilidad y satisfacción del cliente.</p>
            </div>
        </center>
    </section>

    <section id="seccion2"> <!-- Sección del equipo -->
        <a href="#inicio"><script src="https://cdn.lordicon.com/lordicon.js"></script>
        <lord-icon
        src="https://cdn.lordicon.com/laqlvddb.json"
        trigger="boomerang"
        stroke="bold"
        state="hover-partial-roll"
        colors="primary:#000000,secondary:#000000"
        style="width:50px;height:50px">
        </lord-icon></a>

        <CENTER><h2>EQUIPO TEAM</h2></CENTER> <!-- Título de la sección -->
        <div class="container"> <!-- Contenedor para las imágenes del equipo -->
            <div class="image"> <!-- Div para la imagen de un miembro del equipo -->
                <img src="ASSETS/IMG/me.png" alt="Imagen 1"> <!-- Imagen del miembro -->
                <div class="overlay"></div> <!-- Capa superpuesta (puede ser para efectos) -->
                <p align="center">Cristian Plazas</p> <!-- Nombre del miembro -->
            </div>
        </div>
    </section>

    <section id="seccion3"> <!-- Sección de servicios -->
        <a href="#inicio"><script src="https://cdn.lordicon.com/lordicon.js"></script>
        <lord-icon
        src="https://cdn.lordicon.com/laqlvddb.json"
        trigger="boomerang"
        stroke="bold"
        state="hover-partial-roll"
        colors="primary:#000000,secondary:#000000"
        style="width:50px;height:50px">
        </lord-icon></a>

        <center> 
            <div class="slider"> <!-- Contenedor del slider de imágenes -->
                <div class="slider-inner"> <!-- Contenedor interno del slider -->
                    <div class="slider-item"> <!-- Primer item del slider -->
                        <img src="ASSETS/IMG/ima8.jpg" alt="Imagen 1"> <!-- Imagen del primer item -->
                    </div>
                    <div class="slider-item"> <!-- Segundo item del slider -->
                        <img src="ASSETS/IMG/ima2.jpg" alt="Imagen 2"> <!-- Imagen del segundo item -->
                    </div>
                    <div class="slider-item"> <!-- Tercer item del slider -->
                        <img src="ASSETS/IMG/ima7.jpg" alt="Imagen 3"> <!-- Imagen del tercer item -->
                    </div>
                    <div class="slider-item"> <!-- Cuarto item del slider -->
                        <img src="ASSETS/IMG/ima4.jpg" alt="Imagen 4"> <!-- Imagen del cuarto item -->
                    </div>
                    <div class="slider-item"> <!-- Quinto item del slider -->
                        <img src="ASSETS/IMG/ima5.jpg" alt="Imagen 5"> <!-- Imagen del quinto item -->
                    </div>
                    <div class="slider-item"> <!-- Sexto item del slider -->
                        <img src="ASSETS/IMG/ima6.jpg" alt="Imagen 6"> <!-- Imagen del sexto item -->
                    </div>
                    <div class="slider-item"> <!-- Séptimo item del slider -->
                        <img src="ASSETS/IMG/ima3.jpg" alt="Imagen 7"> <!-- Imagen del séptimo item -->
                    </div>
                    <div class="slider-item"> <!-- Octavo item del slider -->
                        <img src="ASSETS/IMG/ima1.jpg" alt="Imagen 8"> <!-- Imagen del octavo item -->
                    </div> 
                </div>
            </div>

            <script>
                const slider = document.querySelector('.slider-inner'); // Selecciona el contenedor interno del slider
                let slideIndex = 0; // Inicializa el índice del slide

                function nextSlide() { // Función para pasar al siguiente slide
                    slideIndex = (slideIndex + 1) % slider.children.length; // Incrementa el índice y lo reinicia si es necesario
                    slider.style.transform = `translateX(-${slideIndex * 300}px)`; // Mueve el slider a la izquierda
                }

                setInterval(nextSlide, 3000); // Cambia de slide cada 3 segundos
            </script>
        </center> 
    </section>

    <section id="seccion4"> <!-- Sección de ubicación -->
        <a href="#inicio"><script src="https://cdn.lordicon.com/lordicon.js"></script>
        <lord-icon
        src="https://cdn.lordicon.com/laqlvddb.json"
        trigger="boomerang"
        stroke="bold"
        state="hover-partial-roll"
        colors="primary:#000000,secondary:#000000"
        style="width:50px;height:50px">
        </lord-icon></a>

        <center><h2>Dónde nos ubicamos?</h2></center> <!-- Título de la sección -->
        <center><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7954.183243111753!2d-74.16578589999999!3d4.577564400000011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sco!4v1714494901866!5m2!1ses-419!2sco" width="900" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></center> <!-- Mapa de Google con la ubicación -->
    </section>

    <section id="seccion5"> <!-- Sección de contacto -->
        <a href="#inicio"><script src="https://cdn.lordicon.com/lordicon.js"></script>
        <lord-icon
        src="https://cdn.lordicon.com/laqlvddb.json"
        trigger="boomerang"
        stroke="bold"
        state="hover-partial-roll"
        colors="primary:#000000,secondary:#000000"
        style="width:50px;height:50px">
        </lord-icon></a>

        <form action="procesar.php" method="post"> <!-- Formulario que envía datos a procesar.php -->
            <center><script src="https://cdn.lordicon.com/lordicon.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/wzrwaorf.json"
                    trigger="hover"
                    colors="primary:#ee6d66,secondary:#000000"
                    style="width:60px;height:60px">
                    <br>
                    Contactenos
                </lord-icon></center>
            <br><br>
            <label for="nombre">Nombre:</label> <!-- Etiqueta para el campo de nombre -->
            <input type="text" id="nombre" name="nombre" required> <!-- Campo de texto para el nombre -->
        
            <label for="email">Email:</label> <!-- Etiqueta para el campo de email -->
            <input type="email" id="email" name="email" required> <!-- Campo de texto para el email -->
        
            <label for="mensaje">Mensaje:</label> <!-- Etiqueta para el campo de mensaje -->
            <textarea id="mensaje" name="mensaje" required></textarea> <!-- Área de texto para el mensaje -->
        
            <input type="submit" value="Enviar"> <!-- Botón para enviar el formulario -->
        </form>
        <!-- <form action="mailto:contacto@lineadecodigo.com" method="post"> -->

         <br>
         <center> <img src="ASSETS/IMG/qr-code.png" width="120" height="120"></center>
    </main>
    <footer>
        <p> SOFTORE &copy; 2023 Derechos reservados</p>
    </footer>
</body>
</html>