<?php
$producto1 = [
    'img' => 'resources/img/01.PNG',
    'titulo' => 'Producto 1',
    'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
];
$producto2 = [
    'img' => 'resources/img/02.PNG',
    'titulo' => 'Producto 2',
    'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
];
$producto3 = [
    'img' => 'resources/img/03.PNG',
    'titulo' => 'Producto 3',
    'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
];
$producto4 = [
    'img' => 'resources/img/04.PNG',
    'titulo' => 'Producto 4',
    'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
];
$producto5 = [
    'img' => 'resources/img/05.PNG',
    'titulo' => 'Producto 5',
    'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
];
$producto6 = [
    'img' => 'resources/img/06.PNG',
    'titulo' => 'Producto 6',
    'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
];
$productos = [$producto1, $producto2, $producto3,$producto4, $producto5, $producto6];

$img_sliders = [
    'resources/img/slide01.jpg',
    'resources/img/slide02.jpg',
    'resources/img/slide03.jpg'
];
$logo = 'resources/img/logo.png';

?>


<html>

<head>
    <title>Document</title>
    <link rel="stylesheet" href="resources/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <!-- Nav -->
    <nav class="navbar navbar-light bg-light">
        <!-- logo -->
        <a class="navbar-brand" href="#">
            <img src="<?php echo $logo ?>" width="30" height="30" class="d-inline-block align-top" alt=""> Tiendas mas
        </a>
        <span class="navbar-text">
            <a href="">Facebook</a>
            <a href=""> Whatsapp</a>
        </span>        
    </nav>
    <!-- Carrucel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            
            <?php foreach($img_sliders as $key => $img_slider){ ?>
                <div class="carousel-item <?php if($key == 0){ echo 'active';} ?>">
                <img src="<?php echo $img_slider ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <?php } ?>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
    <!-- Nuestros productos -->
    <section>
        <h1 class="text-center mt-4">Nuestros productos</h1>
    </section>
    <!-- card -->
    <section>
        <div class="container mt-4">
            <div class="row">
                <?php foreach ($productos as $producto) { ?>
                    <div class="col-md-6 col-sm-12">
                        <div class="card flex-row border mt-4">
                            <img src="<?php echo $producto['img'] ?>" class="card-img-top" style="width: 200px;" alt="">
                            <div class="card-body">
                                    <h5 class="card-title "><?php echo $producto['titulo'] ?></h5>
                                    <p class="card-text"><?php echo $producto['descripcion'] ?></p>
                                <div class="text-muted ">
                                    2 days ago
                                </div> 
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
     <!-- Footer -->
    <section class="border mt-4">
        <footer class="bg-light p-3">
            <p>Jr.Amazonas 120</p>
            <p>Telefono: 123456789</p>
            <div class="text-center">
                <p>Todos los Derechos Reservados 2014</p>
            </div>
        </footer>
    </section>
    <script src="resources/bootstrap/js/jquery.js"></script>
    <script src="resources/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="resources/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>