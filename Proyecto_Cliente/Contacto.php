<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - MSC</title>
    <link rel="stylesheet" href="style_cnt.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <a class="navbar-brand" href="#">
        <img src="logo_msc.png" alt="Logo de MSC" class="logo-img"> Mini Super Crew
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
                    <a class="nav-link" href="MSC.php">Inicio</a>
                </li>
            <li class="nav-item">
                <a class="nav-link" href="Nosotros.php">Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Ofertas.php">Ofertas</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container my-5">
    <h1 class="text-center" style="color: #E65100;">Contáctanos</h1>
    <p class="text-center">¿Tienes alguna pregunta, sugerencia o comentario? Nos encantaría saber de ti.</p>

    <div class="row">
        <div class="col-md-6">
            <h3 style="color: #E65100;">Información de Contacto</h3>
            <p><strong>Dirección:</strong> Calzada Independencia #55, Colonia Centro, CP 44100, Guadalajara, Jal.</p>
            <p><strong>Teléfono:</strong> +52 333 302 4669</p>
            <p><strong>Correo Electrónico:</strong> msc@gmail.com</p>
            <p><strong>Horario de Atención:</strong> Lunes a Viernes, 9:00 AM - 9:00 PM <br>Sábado a Domingo, 9:00 AM - 6:00 PM.</p>
        </div>

        <div class="col-md-6">
            <h3 style="color: #E65100;">Formulario de Contacto</h3>
            <form action="enviar_contacto.php" method="post">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="mensaje">Mensaje:</label>
                    <textarea id="mensaje" name="mensaje" class="form-control" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
            </form>
        </div>
    </div>

    <div id="map" class="mt-3" style="width: 100%; height: 300px;">
    <iframe 
         src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.789287709949!2d-103.34468268845366!3d20.678149880805158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b14a7250c1d9%3A0x3ad06bb61c355902!2sUniversidad%20Tecnol%C3%B3gica%20de%20Jalisco%20(UTJ)%20Ciudad%20Creativa%20Digital%20(CCD)%20-%20Torre%20C!5e0!3m2!1ses-419!2smx!4v1731645633992!5m2!1ses-419!2smx" width="1200" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    </div>
</div>

<br><br><br><br><br><br><br><br><footer>
        <p>&copy; 2024 Mini Super Crew. Todos los derechos reservados.</p>
    </footer>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<button id="scrollToTop" onclick="scrollToTop()">↑</button>
    <script>
        window.onscroll = function() {
            var button = document.getElementById("scrollToTop");
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                button.style.display = "flex";
            } else {
                button.style.display = "none";
            }
        };

        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: "smooth" });
        }
    </script>

</body>
</html>
