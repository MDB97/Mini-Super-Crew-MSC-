<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSC - Bienvenido</title>
    <link rel="stylesheet" href="style_msc.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .ofertas-img, .dest-img {
            width: 100%; 
            height: 200px; 
            object-fit: cover; 
        }
        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px; 
            background-color: orange;
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            cursor: pointer;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s;
        }

        .back-to-top:hover {
            background-color: #e68a00; 
        }
    </style>
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
                <a class="nav-link" href="Nosotros.php">Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Ofertas.php">Ofertas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contacto</a>
            </li>
        </ul>
    </div>
</nav>

    <div id="carouselMSC" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="veg.jpeg" class="d-block w-100" alt="Productos Frescos">
            </div>
            <div class="carousel-item">
                <img src="pasillo.jpeg" class="d-block w-100" alt="Variedad de Artículos">
            </div>
            <div class="carousel-item">
                <img src="mt_sec.jpeg" class="d-block w-100" alt="Servicio Cercano">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselMSC" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselMSC" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>

    <div class="content-section text-center">
        <h1 class="display-4">Bienvenido a Mini Super Crew</h1>
        <br><img src="logo_msc.png" alt="">
        <br><br><p class="lead">Tu mini super de confianza, siempre cerca de ti.</p>
        <p>En MSC, nos comprometemos a ofrecerte productos frescos, una gran variedad de artículos y un servicio cercano y amigable.</p>
        <a href="Nosotros.php" class="btn btn-primary btn-lg mt-3">Saber más</a>
    </div>

    <div class="container my-5">
        <div class="ofertas">
            <h2 class="text-center">Ofertas de la Semana</h2>
            <p>¡No te pierdas nuestras ofertas increíbles!</p>
            <ul>
                <li><strong>Frutas frescas:</strong> 20% de descuento
                    <br><br><img src="frutas.jpg" class="ofertas-img" alt="Frutas frescas">
                </li>
                <br><br><li><strong>Productos de limpieza:</strong> 2x1 en varios artículos
                    <br><br><img src="limpieza.jpg" class="ofertas-img" alt="Productos de limpieza">
                </li>
                <br><br><li><strong>Bebidas refrescantes:</strong> Promoción especial de 3x2
                    <br><br><img src="refris.jpg" class="ofertas-img" alt="Bebidas refrescantes">
                </li>
            </ul>
            <a href="Ofertas.php" class="btn btn-primary">Ver todas las ofertas</a>
        </div>

        <br><br><br><br><br><br><br><br>
        <div class="dest">
            <h2 class="text-center">Productos Destacados</h2>
            <p>Te presentamos nuestros productos más vendidos.</p>
            <ul>
                <li><strong>Pan fresco:</strong> Siempre recién horneado.
                <br><br><img src="pan.jpg" class="dest-img" alt="Pan fresco">
                </li>
                <br><br><li><strong>Lácteos:</strong> Productos frescos y de calidad.
                <br><br><img src="lacteos.jpg" class="dest-img" alt="Lácteos">
                </li>
                <br><br><li><strong>Carnes:</strong> Selección premium de carnes frescas.
                <br><br><img src="carne.jpg" class="dest-img" alt="Carnes frescas">
                </li>
            </ul>
            <a href="Productos.php" class="btn btn-primary">Ver todos los productos</a>
        </div>
    </div>
    <button class="back-to-top" onclick="scrollToTop()">
    ↑
</button>

<script>
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
    window.addEventListener("scroll", function() {
        const backToTopButton = document.querySelector(".back-to-top");
        if (window.scrollY > 200) { 
            backToTopButton.style.display = "flex";
        } else {
            backToTopButton.style.display = "none";
        }
    });
</script>
    <br><br><br><br><br><br><br><br><footer>
        <p>&copy; 2024 Mini Super Crew. Todos los derechos reservados.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
