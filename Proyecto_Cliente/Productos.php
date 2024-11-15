<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - Mini Super Crew</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style_pr.css">
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
                    <a class="nav-link" href="Ofertas.php">Ofertas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>

<div class="container my-5">
    <h2 class="text-center" style="color: #E65100;">Catálogo de Productos</h2>
    <p class="text-center">Explora nuestra amplia variedad de productos de alta calidad.</p>
    
    <div class="row">
        <div class="col-md-3">
            <div class="product-card">
                <img src="frutas.jpg" class="product-img" alt="Frutas frescas">
                <h5>Frutas Frescas</h5>
                <p class="price">$25.00/kg</p>
                <button class="btn btn-primary btn-sm">Agregar al carrito</button>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product-card">
                <img src="limpieza.jpg" class="product-img" alt="Productos de limpieza">
                <h5>Productos de Limpieza</h5>
                <p class="price">$15.00 - $50.00</p>
                <button class="btn btn-primary btn-sm">Agregar al carrito</button>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product-card">
                <img src="refris.jpg" class="product-img" alt="Bebidas refrescantes">
                <h5>Bebidas Refrescantes</h5>
                <p class="price">$12.00 - $35.00</p>
                <button class="btn btn-primary btn-sm">Agregar al carrito</button>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product-card">
                <img src="pan.jpg" class="product-img" alt="Pan fresco">
                <h5>Pan Fresco</h5>
                <p class="price">$8.00/pieza</p>
                <button class="btn btn-primary btn-sm">Agregar al carrito</button>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product-card">
                <img src="lacteos.jpg" class="product-img" alt="Lácteos">
                <h5>Lácteos</h5>
                <p class="price">$20.00 - $40.00</p>
                <button class="btn btn-primary btn-sm">Agregar al carrito</button>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product-card">
                <img src="carne.jpg" class="product-img" alt="Carnes frescas">
                <h5>Carnes Frescas</h5>
                <p class="price">$90.00 - $150.00/kg</p>
                <button class="btn btn-primary btn-sm">Agregar al carrito</button>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product-card">
                <img src="snacks_descuento.jpg" class="product-img" alt="Snacks">
                <h5>Snacks</h5>
                <p class="price">$5.00 - $20.00</p>
                <button class="btn btn-primary btn-sm">Agregar al carrito</button>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product-card">
                <img src="cereal_descuento.jpg" class="product-img" alt="Cereales">
                <h5>Cereales</h5>
                <p class="price">$30.00 - $60.00</p>
                <button class="btn btn-primary btn-sm">Agregar al carrito</button>
            </div>
        </div>
    </div>

    <div class="pagination">
        <a href="#">&laquo;</a>
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">&raquo;</a>
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

</body>
</html>
