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
                                    <h6 class="mb-0">CATEGORIAS</h6>
                                    <div class="menu-list">
                                        <ul id="menu-content2" class="menu-content collapse out">
                                            <!-- Single Item -->
                                            <li data-toggle="collapse" data-target="#produto">
                                                <a href="#">POR PRODUTO</a>
                                                <ul class="sub-menu collapse show" id="produto">
                                                    <li data-toggle="collapse" data-target="#cabeca"><a href="#">Proteção da Cabeça</a>  </li>
                                                    <li><a href="#">Proteção das Mãos</a></li>
                                                    <li><a href="#">Proteção dos Pés</a></li>
                                                    <li><a href="#">Protecção do Corpo</a></li>
                                                    <li><a href="#">Protecção do Anti-Queda</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Item -->
                                            <li data-toggle="collapse" data-target="#riscos" class="collapsed">
                                                <a href="#">POR RISCOS</a>
                                                <ul class="sub-menu collapse" id="riscos">
                                                    <li><a href="#">Anti Estático</a></li>
                                                    <li><a href="#">Calor</a></li>
                                                    <li><a href="#">Choque</a></li>
                                                    <li><a href="#">Corte / Perfuração</a></li>
                                                    <li><a href="#">Frio / Intempériese</a></li>
                                                    <li><a href="#">Biológicos químicos partículas</a></li>
                                                    <li><a href="#">Desgaste</a></li>
                                                     <li><a href="#">Alta Visibilidade</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Item -->
                                            <li data-toggle="collapse" data-target="#trabalhos" class="collapsed">
                                                <a href="#">POR TRABALHOS</a>
                                                <ul class="sub-menu collapse" id="trabalhos">
                                                    <li><a href="#">Agricultura / Jardim</a></li>
                                                    <li><a href="#">Obras públicas / Construção civil</a></li>
                                                    <li><a href="#">Segunda obra / Artesão</a></li>
                                                    <li><a href="#">Indústria pesada</a></li>
                                                     <li><a href="#">Indústria ligeira</a></li>
                                                    <li><a href="#">Serviços / Logística </a></li>
                                                    <li><a href="#">Branco / Higiene </a></li>
                                                    <li><a href="#">Petrolíferas / Gás</a></li>
                                                    <li><a href="#">Indústria Mineira</a></li>
                                                    <li><a href="#">Indústria Mineira</a></li>Setor Eólico
                                                </ul>
                                            </li>
                                            <!-- Single Item -->
                                            <li data-toggle="collapse" data-target="#gama" class="collapsed">
                                                <a href="#">POR NÍVEL DE GAMA</a>
                                                <ul class="sub-menu collapse" id="gama">
                                                    <li><a href="#">Premium</a></li>
                                                    <li><a href="#">Evolution</a></li>
                                                     <li><a href="#">Essential</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Item -->
                                            <li data-toggle="collapse" data-target="#bordados" class="collapsed">
                                                <a href="#">Bordados</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="widget price mb-50">
                                <h6 class="widget-title mb-30">Filtrar por preço</h6>
                                <div class="widget-desc">
                                    <div class="slider-range">
                                        <div data-min="0" data-max="3000" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="0" data-value-max="1350" data-label-result="Price:">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        </div>
                                        <div class="range-price">Preço: 0 - 1350</div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="col-12 col-md-8 col-lg-9">
                        <div class="shop_grid_product_area">
                            <div class="row">

                                <!-- Single gallery Item -->
                                <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig" data-wow-delay="0.2s">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/1.jpg" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <h4 class="product-price">00.00€</h4>
                                        <p>ASO Smoke</p>
                                        <!-- Add to Cart -->
                                        <a href="#" class="add-to-cart-btn">ADICIONAR</a>
                                    </div>
                                </div>

                                <!-- Single gallery Item -->
                                <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig" data-wow-delay="0.3s">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/1.jpg" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <h4 class="product-price">00.00€</h4>
                                        <p>ASO Smoke</p>
                                        <!-- Add to Cart -->
                                        <a href="#" class="add-to-cart-btn">ADICIONAR</a>
                                    </div>
                                </div>

                                <!-- Single gallery Item -->
                                <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig" data-wow-delay="0.4s">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/1.jpg" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <h4 class="product-price">00.00€</h4>
                                        <p>ASO Smoke</p>
                                        <!-- Add to Cart -->
                                        <a href="#" class="add-to-cart-btn">ADICIONAR</a>
                                    </div>
                                </div>

                                <!-- Single gallery Item -->
                                <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig" data-wow-delay="0.5s">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/1.jpg" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <h4 class="product-price">00.00€</h4>
                                        <p>ASO Smoke</p>
                                        <!-- Add to Cart -->
                                        <a href="#" class="add-to-cart-btn">ADICIONAR</a>
                                    </div>
                                </div>

                                <!-- Single gallery Item -->
                                <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig" data-wow-delay="0.6s">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/1.jpg" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <h4 class="product-price">00.00€</h4>
                                        <p>ASO Smoke</p>
                                        <!-- Add to Cart -->
                                        <a href="#" class="add-to-cart-btn">ADICIONAR</a>
                                    </div>
                                </div>

                                <!-- Single gallery Item -->
                                <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig" data-wow-delay="0.7s">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/1.jpg" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <h4 class="product-price">00.00€</h4>
                                        <p>ASO Smoke</p>
                                        <!-- Add to Cart -->
                                        <a href="#" class="add-to-cart-btn">ADICIONAR</a>
                                    </div>
                                </div>

                                <!-- Single gallery Item -->
                                <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig" data-wow-delay="0.8s">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/1.jpg" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <h4 class="product-price">00.00€</h4>
                                        <p>ASO Smoke</p>
                                        <!-- Add to Cart -->
                                        <a href="#" class="add-to-cart-btn">ADICIONAR</a>
                                    </div>
                                </div>

                                <!-- Single gallery Item -->
                                <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig" data-wow-delay="0.9s">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/1.jpg" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <h4 class="product-price">00.00€</h4>
                                        <p>ASO Smoke</p>
                                        <!-- Add to Cart -->
                                        <a href="#" class="add-to-cart-btn">ADICIONAR</a>
                                    </div>
                                </div>

                                <!-- Single gallery Item -->
                                <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig" data-wow-delay="1s">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/1.jpg" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <h4 class="product-price">00.00€</h4>
                                        <p>ASO Smoke</p>
                                        <!-- Add to Cart -->
                                        <a href="#" class="add-to-cart-btn">ADICIONAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="shop_pagination_area wow fadeInUp" data-wow-delay="1.1s">
                            <nav aria-label="Page navigation">
                                <ul class="pagination pagination-sm">
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                </ul>
                            </nav>
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
