<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("template/meta.php") ?>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/css/uikit.min.css" />
    <title>LXG | Compliance</title>
</head>

<body>

    <main>
        <div class="portadaCompliance pb-4">
            <?php include("template/header.php") ?>
            <div class="container">
                <div class="row">
                    <div id="ourFirm" class="col-sm-12 paddingBottom">
                        <div class="container">
                            <div class="d-flex justify-content-center">
                                <img class="icon" src="./public/img/icons/isolationMode6.svg" alt="Isolation Mode">
                            </div>
                            <div class="col-sm-12 d-flex justify-content-center">
                                <h1 data-aos="zoom-in" class="titleOurApproach" style="color: var(--link) !important; margin-bottom: 50px !important;">
                                    Compliance
                                </h1>
                            </div>
                            <div class="col-sm-12 col-lg-7 mx-lg-auto text-center">
                                <p class="textWhite">
                                    LXG Family Office´s US company, LXG Wealth Advisory LLC, 
                                    is a registered investment advisor (RIA). 
                                    For more information about LXG Wealth Advisory’s 
                                    practices and business please visit www.adviserinfo.sec.gov
                                </p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="https://adviserinfo.sec.gov/firm/summary/315952" target="_blank"><img style="margin-top: 50px !important;" src="./public/img/Buttons/buttonCompliance.svg" alt="See Our Form Here"></a>
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
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</body>
<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/js/uikit-icons.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js" integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- Control de Responsive Design !-->
<script src="public/js/control.js"></script>
<script>
    AOS.init();
</script>

</html>