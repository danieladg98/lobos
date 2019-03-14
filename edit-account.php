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

            <!-- ****** Quick View Modal Area Start ****** -->
            <div class="modal fade" id="quickview" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

                        <div class="modal-body">
                            <div class="quickview_body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-lg-5">
                                            <div class="quickview_pro_img">
                                                <img src="img/product-img/1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-7">
                                            <div class="quickview_pro_des">
                                                <h4 class="title">ASO Smoke</h4>

                                                <h5 class="price">00.00€</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia expedita quibusdam aspernatur, sapiente consectetur accusantium perspiciatis praesentium eligendi, in fugiat?</p>
                                                <a href="product-details.html">Ver mais</a>
                                            </div>
                                            <!-- Add to Cart Form -->
                                            <form class="cart" method="post">
                                                <div class="quantity">
                                                    <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>

                                                    <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">

                                                    <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                </div>
                                                <button type="submit" name="addtocart" value="5" class="cart-submit">Adicionar</button>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ****** Quick View Modal Area End ****** -->

            <section class="shop_grid_area section_padding_20">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-4 col-lg-3">
                            <div class="shop_sidebar_area">

                                <div class="widget catagory mb-50">
                                    <!--  Side Nav  -->
                                    <div class="nav-side-menu">
                                        <article id="post-39" class="post-39 page type-page status-publish hentry">
                                            <header class="entry-header">
                                                <h6 class="mb-0">A MINHA CONTA</h6>
                                            </header>

                                            <div class="menu-list">
                                                <ul id="menu-content2" class="menu-content collapse out">
                                                    <div class="entry-content">
                                                        <div class="woocommerce">
                                                            <nav class="woocommerce-MyAccount-navigation">
                                                                <ul>
                                                                    <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders">
                                                                        <a href="https://localhost/lobos/my-account/orders/">Encomendas</a>
                                                                    </li>
                                                                    <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address">
                                                                        <a href="edit-address.php">Endereços</a>
                                                                    </li>
                                                                    <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account">
                                                                        <a href="edit-account.php">Detalhes Conta</a>
                                                                    </li>
                                                                    <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout">
                                                                        <a href="https://localhost/lobos/my-account/customer-logout/?_wpnonce=86986b1781">Logout</a>
                                                                    </li>
                                                                </ul>
                                                            </nav>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-12 col-md-6 col-lg-7  ml-30 mb-30">
                            <div class="checkout_details_area mt-50 clearfix">

                                <div class="cart-page-heading">
                                    <h5>DETALHES CONTA</h5>
                                </div>
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="first_name">Primeiro Nome <span>*</span></label>
                                            <input type="text" class="form-control" id="first_name" value="Daniela" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="last_name">Último Nome <span>*</span></label>
                                            <input type="text" class="form-control" id="last_name" value="Gonçalves" required>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label for="phone_number">Telemóvel <span>*</span></label>
                                            <input type="number" class="form-control" id="phone_number" min="0" value="937646410">
                                        </div>
                                        <div class="col-12 mb-4">
                                            <label for="email_address">Email<span>*</span></label>
                                            <input type="email" class="form-control" id="email_address" value="danieladg98@hotmail.com">
                                        </div>

                                        
                                        <div class="col-12 mt-4">
                                            <div class="cart-page-heading">
                                                <h5>ALTERAR PASSWORD</h5>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-4">
                                            <label for="pass_actual">Password Atual</label>
                                            <input type="text" class="form-control" id="pass_actual" value="">
                                        </div>
                                        
                                          <div class="col-12 mb-4">
                                            <label for="pass_new">Nova Password</label>
                                            <input type="text" class="form-control" id="pass_actual" value="">
                                        </div>
                                        
                                         <div class="col-12 mb-4">
                                            <label for="confirm_pass_new">Confirmar Nova Password</label>
                                            <input type="text" class="form-control" id="pass_actual" value="">
                                        </div>
                                        
                                        <div class="col-12">
                                            <div class="custom-control custom-checkbox d-block mb-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Termos e Condições</label>
                                            </div>
                                        </div>
                                        
                                        <button type="submit" name="send" class="woocommerce-Button cart-submit account_details_btn mt-30" name="save_account_details" id="mrg_left_send">Guardar alterações</button>
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </section>

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
