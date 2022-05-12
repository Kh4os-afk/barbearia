<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>BARBEARIA MARKS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-cente">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
            <h1 class="logo me-auto me-lg-0"><a href="index.html">BARBEARIA </a></h1>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
                    <li class="dropdown"><a href="#"><span>Login / Cadastro</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="nav-link scrollto" href="#book-a-table">Cadastro</a></li>
                            <li><a class="nav-link scrollto" href="login.php">Login</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header><br><br>
    <main id="main">
        <section id="book-a-table" class="book-a-table">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <center>
                        <p>Cadastro</p>
                    </center>
                </div>
                <form action="#" method="post" role="form" class="pp" data-aos="fade-up" data-aos-delay="100">
                    <center>
                        <div class="col-lg-4 form-group">
                            <input type="text" autocomplete="off" name="nome" class="form-control" require="" placeholder="Nome" data-rule="minlen:4">
                            <p></p>
                            <input type="password" autocomplete="off" class="form-control" require="" name="Telefone" placeholder="Telefone" data-rule="minlen:4"><br>
                            <input type="password" autocomplete="off" class="form-control" require="" name="Idade" placeholder="Idade" data-rule="minlen:4"><br>
                            <select style="color: #a49b89;" class="form-control" required name="sexo" id="">
                                <option selected value="">SEXO ▼</option>
                                <optgroup label="Escolha o Sexo">
                                    <option value="1">Masculino</option>
                                    <option value="0">Femenino</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-lg-6 col-md-6 form-group ">
                        </div>
                    </center>
                    <br>
                    <div class="text-center"><button type="submit">Enviar</button></div>
                </form>
            </div>
        </section>
    </main>
    <footer id="footer" style="height:80px;margin-top:-30px;">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Restaurantly</span></strong>. All Rights Reserved <br>
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer>
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
<style>
    /* .pp ::placeholder {
    color: #625b4b;
  } */

    .pp input,
    .pp select,
    .pp textarea {
        border-radius: 0;
        box-shadow: none;
        font-size: 14px;
        background: #0c0b09;
        border-color: #625b4b;
        color: white;
        text-transform: uppercase;
    }

    .pp input::-moz-placeholder,
    .pp select::-moz-placeholder,
    .pp textarea::-moz-placeholder {
        color: #a49b89;
    }

    .pp input::placeholder,
    .pp select::placeholder,
    .pp textarea::placeholder {
        color: #a49b89;
    }

    .pp input:focus,
    .pp select:focus,
    .pp textarea:focus {
        border-color: #cda45e;
        box-shadow: none;
        background: #0c0b09;
        color: #fff;
    }

    .pp input,
    select {
        height: 44px;
    }

    .pp textarea {
        padding: 10px 12px;
    }

    .pp button[type=submit] {
        background: #cda45e;
        border: 0;
        padding: 10px 35px;
        color: #fff;
        transition: 0.4s;
        border-radius: 50px;
    }

    .pp button[type=submit]:hover {
        background: #d3af71;
    }
</style>