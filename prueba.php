<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("template/meta.php") ?>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/css/uikit.min.css" />
    <title>LXG | Home</title>
</head>

<body>

    <main>
        <?php include("carousel.php") ?>
        <div class="whyUs paddingTop paddingBottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 pb-md-4 align-self-start text-center text-md-start">
                        <h2 class="titleSection">Why Us</h2>
                    </div>
                    <div class="col-md-6 mt-md-4 pt-md-4 align-self-end text-center text-md-start">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text1 animate__animated animate__backInRight animate__delay-0s animate__fast text-md-start">
                                    We are a firm dedicated to deliver world-class
                                    financial services to our clients throughout
                                    Latin America.
                                    <br><br>
                                    We are able to provide a broad range of services
                                    including M&A advisory, capital market solutions,
                                    wealth planning, and wealth management
                                </p>
                            </div>
                            <div class="col-md-12 mt-3 text-center text-md-start">
                                <a href="../LXG/ourFirm.php"><img class="hvr-grow animate__animated animate__heartBeat animate__delay-0s animate__fast" src="./public/img/Buttons/buttonLearnMoreT.svg" alt="Learn More"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section col-sm-12 text-center text-md-start">
            <div class="container">
                <h2 class="titleSection paddingTop paddingBottom">What we do</h2>
            </div>
        </div>
        <div class="col-sm-12 pb-4 pt-4">
            <div class="paddingBottom col-md-12">
                <div class="container">
                    <div class="carousel mb-3">
                        <div class="carousel-section" id="section1">
                            <div class="portadaWhatWe1">
                                <div class="row">
                                    <div class="col-sm-12 col-md-4 align-self-md-center justify-content-md-end">
                                        <div class="col-sm-12 d-flex justify-content-center justify-content-md-start">
                                            <img class="iconCarousel  mb-3" src="./public/img/icons/isolationModeCrossT.svg">
                                        </div>
                                        <div class="text-center text-md-start">
                                            <h3 class="subtitle fw-bolder m-0 mb-2">LXG Capital</h3>
                                            <p class="subText mb-2">
                                                We provide clients with advisory services for
                                                a wide range of corporate finance situations, such as
                                            </p>
                                            <span>
                                                <p class="minText fw-lighter mb-3">
                                                    Acquisitions // Mergers // Disposals //
                                                    Capital and fund raisings // Assisting issuers in
                                                    international bond and equity offerings
                                                </p>
                                            </span>
                                        </div>
                                        <div class="col-sm-12 col-md-5 d-md-flex justify-content-center text-center text-md-start justify-content-md-start mb-3">
                                            <a href="../LXG/businesses.php#capital"><img src="./public/img/Buttons/buttonLearnMore2.svg" alt="Learn More"></a>
                                        </div>
                                        <div class="col-sm-12 col-md-4 d-md-flex justify-content-center text-center text-md-start justify-content-md-start">
                                            <button class="m-1" style="border: none !important; background-color: transparent !important;" onclick="prevSection()">
                                                <img style="transform: rotate(180deg) !important;" src="./public/img/Buttons/buttonForward.svg" alt="Anterior">
                                            </button>
                                            <button class="m-1" style="border: none !important; background-color: transparent !important;" onclick="nextSection()">
                                                <img src="./public/img/Buttons/buttonForward.svg" alt="Siguiente">
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-8 d-none d-md-block p-0 m-0">
                                        <div class="col-sm-12 d-flex justify-content-center justify-content-md-end">
                                            <img class="imgHomeCapital animate__animated animate__backInRight animate__delay-0s animate__fast" src="./public/img/imgPortadas/LXG-Home-1.png" alt="Imagen 1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-section" id="section1">
                            <div class="portadaWhatWe1">
                                <div class="row">
                                    <div class="col-sm-12 col-md-4 align-self-md-center ">
                                        <div class="col-sm-12 d-flex justify-content-center justify-content-md-start">
                                            <img class="iconCarousel mb-3" src="./public/img/icons/isolationModeArrowT.svg">
                                        </div>
                                        <div class="text-center text-md-start">
                                            <h3 class="subtitle fw-bolder m-0 mb-2">LXG Family Office</h3>
                                            <p class="subText mb-2">
                                                Wealth planning, investment management
                                                and other family-office related services,
                                                such as
                                            </p>
                                            <span>
                                                <p class="minText fw-lighter mb-3">
                                                    Review of wealth planning structures and investment portfolios //
                                                    Wealth, succession and tax planning advisory //
                                                    Investment portfolio design, implementation, and management //
                                                    Private investment advisory //
                                                    Investment portfolio supervision and reporting
                                                </p>
                                            </span>
                                        </div>
                                        <div class="col-sm-12 col-md-5 d-md-flex justify-content-center text-center text-md-start justify-content-md-start mb-3">
                                            <a href="../LXG/businesses.php#familyOffice"><img src="./public/img/Buttons/buttonLearnMore2.svg" alt="Learn More"></a>
                                        </div>
                                        <div class="col-sm-12 col-md-4 d-md-flex justify-content-center text-center text-md-start justify-content-md-start">
                                            <button class="m-1" style="border: none !important; background-color: transparent !important;" onclick="prevSection()">
                                                <img style="transform: rotate(180deg) !important;" src="./public/img/Buttons/buttonForward.svg" alt="Anterior">
                                            </button>
                                            <button class="m-1" style="border: none !important; background-color: transparent !important;" onclick="nextSection()">
                                                <img src="./public/img/Buttons/buttonForward.svg" alt="Siguiente">
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-8 d-none d-md-block p-0 m-0">
                                        <div class="col-sm-12 d-flex justify-content-center justify-content-md-end">
                                            <img class="imgHomeOffice animate__animated animate__backInRight animate__delay-0s animate__fast" src="./public/img/imgPortadas/portadaWhatWe2.png" alt="Imagen 1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" portadaWeAre paddingTop paddingBottom">
            <div data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="container">
                <div class="row">
                    <div class="paddingTop col-md-2 align-self-start text-center text-md-start pt-4 p-md-0">
                        <h2 class="titleSectionWhite">We Are</h2>
                    </div>
                    <div class="sectionLxg col-md-10">
                        <div class="row">
                            <div class="col-sm-9 p-4">
                                <div class="d-flex justify-content-center justify-content-md-end text-center text-md-start">
                                    <img class="icon4" src="./public/img/icons/L.svg" alt="">
                                    <img class="icon4" src="./public/img/icons/X.svg" alt="">
                                    <img class="icon4" src="./public/img/icons/G.svg" alt="">
                                </div>
                            </div>
                            <div class="col-sm-3 ps-4 pe-0 align-self-end paddingTop">
                                <div data-aos="fade-left" class="d-flex justify-content-center text-center text-md-start">
                                    <p class="minTextWhite">
                                        Financial firm focused on investment banking, wealth management
                                        and fund management in Latin America <br><br> Since 2009
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ourNumbers">
            <div class="section container">
                <div class="row align-items-center">
                    <!-- Título -->
                    <div class="col-sm-12 d-flex justify-content-center text-center justify-content-md-start text-md-start paddingBottom">
                        <h2 class="titleSection">Our Numbers</h2>
                    </div>
                    <!-- Contenido -->
                    <div class="container text-center">
                        <div class="row justify-content-center align-items-center">
                            <!-- Primer icono -->
                            <div data-aos="fade-down" class="col-md-3 mb-3">
                                <div class="d-flex justify-content-center">
                                    <img class="iconTime" src="./public/img/icons/time.svg">
                                </div>
                                <p class="textIcon text-center">
                                    15 YEARS <br>
                                    IN THE MARKET
                                </p>
                            </div>
                            <!-- Barra intermedia visible solo en dispositivos de escritorio -->
                            <div class="col-md-auto d-none d-md-block align-self-start">
                                <div class="d-flex justify-content-center">
                                    <div class="linea-vertical"></div>
                                </div>
                            </div>
                            <!-- Segundo icono -->
                            <div data-aos="fade-up" class="col-md-3 mb-3">
                                <div class="d-flex justify-content-center">
                                    <img class="iconCircle" src="./public/img/icons/circle.svg">
                                </div>
                                <p class="textIcon text-center">
                                    OVER US$ 60B <br>
                                    IN DEAL VALUE
                                </p>
                            </div>
                            <!-- Barra intermedia visible solo en dispositivos de escritorio -->
                            <div class="col-md-auto d-none d-md-block align-self-start">
                                <div class="d-flex justify-content-center">
                                    <div class="linea-vertical"></div>
                                </div>
                            </div>
                            <!-- Tercer icono -->
                            <div data-aos="fade-down" class="col-md-3 mb-3">
                                <div class="d-flex justify-content-center">
                                    <img class="iconOffice" src="./public/img/icons/office.svg">
                                </div>
                                <p class="textIcon text-center">
                                    5 LATAM <br>
                                    OFFICE
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="section">
                <div class="row justify-content-center align-items-center">
                    <div class="container mt-4">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-sm-12 pb-4">
                                <div class="col-sm-12">
                                    <!-- Carousel -->
                                    <!-- Botones de navegación personalizados -->
                                    <div class="d-flex justify-content-center justify-content-md-end">
                                        <div class="p-3 ps-0">
                                            <button id="btnPrev">
                                                <img style="transform: rotate(180deg) !important;" src="./public/img/Buttons/buttonForward.svg" alt="Anterior">
                                            </button>
                                        </div>
                                        <div class="p-3 ps-0">
                                            <button id="btnNext">
                                                <img src="./public/img/Buttons/buttonForward.svg" alt="Siguiente">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div id="carouselNovedades" class="owl-carousel owl-theme paddingBottom">
                                    <?php
                                    try {
                                        include("administrador/config/conexion.php");
                                        $sql = $conexion->prepare("SELECT * FROM novedades ORDER BY id DESC");
                                        $sql->execute();
                                        $listarNovedades = $sql->fetchAll(PDO::FETCH_ASSOC);

                                        foreach ($listarNovedades as $index => $novedad) {
                                            // Cambiar las clases de color
                                            $cardColorClass = $index % 2 == 0 ? 'bg-custom1' : 'bg-custom2';
                                    ?>
                                            <div class="item">
                                                <div class="card <?= $cardColorClass ?> border-0 rounded-0 mx-auto">
                                                    <!-- Contenido de la tarjeta -->
                                                    <img src="./public/img/cards/<?= $novedad['imagen'] ?>" class="card-img-top" alt="Imagen de novedad">
                                                    <div class="card-body p-0">
                                                        <!-- Contenido del cuerpo de la tarjeta -->
                                                        <?php
                                                        $meses = [
                                                            'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
                                                            'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
                                                        ];

                                                        $fecha = new DateTime($novedad['fecha']);
                                                        $mes = $meses[$fecha->format('n') - 1]; // Restamos 1 porque los meses están indexados desde 1
                                                        $año = $fecha->format('Y');

                                                        $parsedDate = $mes . ' ' . $año;
                                                        ?>
                                                        <p class="card-text-date fw-bolder"><?= $parsedDate ?></p>
                                                        <h5 class="card-title"><?php echo substr($novedad['titulo'], 0, 50) . '...' ?></h5>
                                                        <p class="card-text fw-lighter"><?php echo substr($novedad['descripcion'], 0, 100) . '...' ?></p>
                                                        <div class="d-flex justify-content-end">
                                                            <a href="verNews.php?id=<?= $novedad['id'] ?>" class="stretched-link">
                                                                <img src="./public/img/Buttons/mas.svg" alt="Ver Más">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    } catch (Exception $e) {
                                        echo '<script>console.log(' . json_encode($e->getMessage()) . ')</script>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portadaCulture ">
            <div class="row m-0 p-0">
                <div class="col-sm-12">
                    <div class="container">
                        <div class="col-sm-6 col-md-6 text-center text-md-start justify-content-md-start">
                            <p data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="textPrincipalHome text-decoration-underline">
                                Go forth <br>
                                and set the world
                                on fire
                            </p>
                            <p class="textWhite">
                                San Ignacio de Loyola
                            </p>
                            <div class="col-12 justify-content-center">
                                <a href="../LXG/businesses.php"><img src="./public/img/Buttons/buttonCultureValues.svg" alt="Culture & Values"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sectionImage2">
            <div class="container">
                <div class="section col-sm-12 text-center text-md-start justify-content-center justify-content-md-start paddingTop paddingBottom">
                    <div class="container">
                        <img data-aos="zoom-in-left" class="imgContact" src="./public/img/imgPortadas/contact.png">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 align-self-center">
                                <h1 class="titleSection mb-4 mt-4 text-center text-md-start">
                                    Let’s get
                                    in contact
                                </h1>
                                <p class="subText fw-lighter">
                                    We are always looking to add team players who conduct
                                    according to firm ethical and moral standards.
                                </p>
                            </div>
                            <div class="col-sm-12 col-md-8">
                                <div class="container">
                                    <div class="row">
                                        <form id="contactForm" action="enviar.php" method="post">
                                            <div class="row">
                                                <div class="mb-4 text-start col-md-6">
                                                    <label for="firstName" class="form-label">First Name</label>
                                                    <input type="text" class="form-control bottom-border" id="firstName">
                                                </div>
                                                <div class="mb-4 text-start col-md-6">
                                                    <label for="lastName" class="form-label">Last Name</label>
                                                    <input type="text" class="form-control bottom-border" id="lastName">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-4 text-start col-md-6">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control bottom-border" id="email">
                                                </div>
                                                <div class="mb-4 text-start col-md-6">
                                                    <label for="subject" class="form-label">Subject</label>
                                                    <input type="text" class="form-control bottom-border" id="subject">
                                                </div>
                                            </div>
                                            <div class="mb-4 text-start col-12">
                                                <label for="message" class="form-label">Message</label>
                                                <textarea class="form-control bottom-border" id="message" rows="5"></textarea>
                                            </div>
                                            <div class="col-sm-12 justify-content-end text-end paddingForm">
                                                <button type="submit" class="btn2">Send</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php include("template/footer.php") ?>
    </footer>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</body>
<script src="public/js/control.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- Script para inicializar el carousel y configurar los botones -->
<script>
    $(document).ready(function() {
        $("#carouselNovedades").owlCarousel({
            loop: true,
            margin: 0,
            responsiveClass: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 4
                }
            },
            dots: false
        });

        // Botón para avanzar
        $('#btnNext').click(function() {
            $('#carouselNovedades').trigger('next.owl.carousel');
        })
        // Botón para retroceder
        $('#btnPrev').click(function() {
            $('#carouselNovedades').trigger('prev.owl.carousel');
        })
    });
</script>
<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/js/uikit-icons.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js" integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- Control de Responsive Design !-->
<script>
    AOS.init();
</script>

</html>