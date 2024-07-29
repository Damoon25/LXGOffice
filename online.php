<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("template/meta.php") ?>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/css/uikit.min.css" />
    <title>LXG | Online</title>
</head>

<body>

    <main>
        <div class="portadalXGOnline pb-4">
            <?php include("template/header.php") ?>
            <div class="container">
                <div class="row">
                    <div id="ourFirm" class="col-sm-12 paddingBottom">
                        <div class="container">
                            <div class="d-flex justify-content-center">
                                <img class="icon" src="./public/img/icons/isolationMode7.svg" alt="Isolation Mode">
                            </div>
                            <div class="col-sm-12 d-flex justify-content-center">
                                <h1 data-aos="zoom-in" class="titleOurApproach mb-0" style="color: var(--link) !important;">
                                    LXG Online
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="whyUs paddingTop paddingBottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 pb-md-4 align-self-start text-center text-md-start">
                        <p class="subText animate__animated animate__backInRight animate__delay-0s animate__fast text-md-start fw-lighter" style="color: var(--fondo1) !important;">
                            At LXG Family Office, we embrace the use of cutting-edge technology to empower our clients with portfolio analysis,
                            management, supervision, and reporting tools.
                        </p>
                        <h3 class="text1 fw-bold mb-2" style="color: var(--btn-color) !important;">
                            Login to platform
                        </h3>
                        <div class="col-sm-12 text-center text-md-start justify-content-center justify-content-md-start">
                            <a target="_blank" href="https://id.addepar.com/login?continue=%7B%22targetName%22%3A%22oauth2.
                            authorize%22%2C%22queryParams%22%3A%7B%22response_type%22%3A%22code%22%2C%22scope%22%3A%22session%22%2C%22client_
                            id%22%3A%22iverson%22%2C%22state%22%3A%22%7B%7D%22%2C%22code_
                            challenge%22%3A%22fc3e104ab23d517ed2450fa75ed71735f1f488a98198db15d5fb5aafe2927c3b%22%2C%22
                            redirect_uri%22%3A%22https%3A%2F%2Flxg.addepar.com
                            %2Foauth2%2Fcb%22%2C%22firm%22%3A%22lxg%22%7D%7D&firm=lxg">
                            <img width="25%" src="./public/img/Buttons/login.svg" alt="Log In"></a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-md-4 align-self-end text-center text-md-start">
                        <p class="subText animate__animated animate__backInRight animate__delay-0s animate__fast text-md-start" style="color: var(--link) !important;">
                            For this purpose, we provide the LXG Online service for our clients,
                            which is built on the Addepar® technology platform.
                            Addepar stands as one of the world’s leading wealth management IT solution providers,
                            with over US$4.5 trillion being managed on their platform. Using this tool,
                            we can easily and continually aggregate all financial accounts and investments
                            and enhance them with relevant market and third-party data to provide a consolidated
                            view of clients’ assets across institutions.
                            <br><br>
                            The privacy and security of our clients’ data is our top priority.
                            Trust and transparency are cornerstones of Addepar's security program,
                            and security consciousness is a fundamental component of Addepar’s operational excellence.
                            Addepar is entrusted to protect the data of some of the largest industry-leading financial institutions.
                        </p>
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