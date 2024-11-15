<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ofertas - Mini Super Crew</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style_ofertas.css">
</head>
<body>

<nav class="navbar navbar-expand-lg sticky-top">
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
                    <a class="nav-link" href="Productos.php">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>

<div class="container my-5">
    <div class="offer-banner">
        <h2>¡Ofertas del Buen Fin en MSC!</h2>
        <p>Descuentos especiales del 16 al 29 de noviembre en productos seleccionados.</p>
    </div>

    <h2 class="section-title text-center">Ofertas del Buen Fin </h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="frutas.jpg" class="card-img-top ofertas-img" alt="Frutas frescas">
                <div class="card-body">
                    <h5 class="card-title">Frutas frescas</h5>
                    <p class="card-text">Descuento de <span class="highlight">20%</span> en frutas seleccionadas. ¡Perfecto para una dieta saludable!</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="limpieza.jpg" class="card-img-top ofertas-img" alt="Productos de limpieza">
                <div class="card-body">
                    <h5 class="card-title">Productos de limpieza</h5>
                    <p class="card-text">¡2x1 en artículos de limpieza! Mantén tu hogar impecable por menos.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="refris.jpg" class="card-img-top ofertas-img" alt="Bebidas refrescantes">
                <div class="card-body">
                    <h5 class="card-title">Bebidas refrescantes</h5>
                    <p class="card-text">Promoción <span class="highlight">3x2</span> en refrescos y jugos de todas las marcas.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="snacks_descuento.jpg" class="card-img-top ofertas-img" alt="Snacks y botanas">
                <div class="card-body">
                    <h5 class="card-title">Snacks y botanas</h5>
                    <p class="card-text">Disfruta un <span class="highlight">25% de descuento</span> en chips, galletas y más.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="cereal_descuento.jpg" class="card-img-top ofertas-img" alt="Cereales y granolas">
                <div class="card-body">
                    <h5 class="card-title">Cereales y granolas</h5>
                    <p class="card-text">Aprovecha <span class="highlight">15% de descuento</span> en cereales y granolas selectas.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="higiene_descuento.jpg" class="card-img-top ofertas-img" alt="Artículos de higiene personal">
                <div class="card-body">
                    <h5 class="card-title">Higiene personal</h5>
                    <p class="card-text">Descuento de <span class="highlight">10%</span> en productos de cuidado personal como jabones y shampoos.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <a href="Productos.php" class="btn btn-primary btn-lg">Explora todos nuestros productos</a>
    </div>
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
</script>
</body>
</html>
