<!DOCTYPE html>
<html lang="en">

<head>
    <title>LOBO'S</title>

    <?php
      include_once 'parts/head.php';
    ?>

</head>

<body>

  <?php
    session_start();
  ?>

        <div id="wrapper">

          <?php
            include_once 'parts/nav.php';
          ?>

                <!-- ****** Welcome Slides Area Start ****** -->
                <section class="welcome_area">
                    <div class="welcome_slides owl-carousel">
                        <!-- Single Slide Start -->
                        <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(img/bg-img/head.jpg);">
                            <div class="container h-100">
                                <div class="row h-100 align-items-center">
                                    <div class="col-12">
                                        <div class="welcome_slide_text">

                                            <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Proteção da Cabeça</h2>
                                            <a href="#" class="btn karl-btn" data-animation="fadeInUp" data-delay="1s" data-duration="500ms">Ver Produtos</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Slide Start -->
                        <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(img/bg-img/hands.jpg);">
                            <div class="container h-100">
                                <div class="row h-100 align-items-center">
                                    <div class="col-12">
                                        <div class="welcome_slide_text">

                                            <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Proteção das Mãos</h2>
                                            <a href="#" class="btn karl-btn" data-animation="fadeInLeftBig" data-delay="1s" data-duration="500ms">Ver Produtos</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(img/bg-img/feet2.jpg);">
                            <div class="container h-100">
                                <div class="row h-100 align-items-center">
                                    <div class="col-12">
                                        <div class="welcome_slide_text">

                                            <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Proteção dos Pés</h2>
                                            <a href="#" class="btn karl-btn" data-animation="fadeInLeftBig" data-delay="1s" data-duration="500ms">Ver Produtos</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(img/bg-img/anti.jpg);">
                            <div class="container h-100">
                                <div class="row h-100 align-items-center">
                                    <div class="col-12">
                                        <div class="welcome_slide_text">

                                            <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Proteção do Corpo</h2>
                                            <a href="#" class="btn karl-btn" data-animation="fadeInLeftBig" data-delay="1s" data-duration="500ms">Ver Produtos</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <!-- ****** Welcome Slides Area End ****** -->

                <?php
                  include_once 'parts/footer.php';
                ?>

        </div>
        <!-- /.wrapper end -->

        <!-- jQuery (Necessary for All JavaScript Plugins) -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <!-- Popper js -->
        <script src="js/popper.min.js"></script>
        <!-- Bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Plugins js -->
        <script src="js/plugins.js"></script>
        <!-- Active js -->
        <script src="js/active.js"></script>

</body>

</html>
