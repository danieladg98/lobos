<!DOCTYPE html>
<html lang="en">

<head>
    <title>LOBO'S</title>

    <?php
      include_once 'parts/head.php';
    ?>

</head>

<body>
    <div id="wrapper">

        <?php
    include_once 'parts/nav.php';
  ?>


            <!-- <<<<<<<<<<<<<<<<<<<< Single Product Details Area Start >>>>>>>>>>>>>>>>>>>>>>>>> -->
            <section class="single_product_details_area section_padding_0_100 mt-50">
                <div class="container">
                    <div class="row">

                        <div class="col-12 col-md-6">

                            <iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=41.964558, -8.713621&amp;q=+(Auto%20RPM)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/">Create route map</a></iframe>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="single_product_desc">

                                <h4 class="title" id="title_bold"><a href="#">CONTACTE-NOS</a></h4>

                                <div class="widget size mb-50">

                                </div>

                                <!-- Add to Cart Form -->
                                <form class="cart clearfix mb-50 d-flex" method="post">
                                    <div class="quantity">
                                        <input type="text" class="orcamento" name="nome" placeholder="Nome">

                                        <input type="text" class="orcamento" name="apelido" placeholder="Apelido">

                                        <input type="email" class="orcamento" name="email" placeholder="Email">

                                        <input type="text" class="orcamento" name="tel" placeholder="Telemóvel">


                                        <textarea name="obs" form="usrform" class="orcamento_obs" placeholder="Observações"></textarea>


                                        <button type="submit" name="send" class="cart-submit" id="mrg_left_send">Enviar</button>
                                    </div>

                                </form>

                                <i class="fa fa-phone mt-3"></i> <a href="tel:+"> +351 251 798 632</a><br>
                                <i class="fa fa-envelope mt-3"></i> <a href=""> email@lobos.com</a><br>
                                <i class="fa fa-globe mt-3"></i> Rua da Valinha, Nº 6 Loja - Reboreda <br>
                               <div class="my-4 contactos_social_area">
                                                 <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                            </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- <<<<<<<<<<<<<<<<<<<< Single Product Details Area End >>>>>>>>>>>>>>>>>>>>>>>>> -->


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
