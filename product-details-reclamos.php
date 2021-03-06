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

            <!-- <<<<<<<<<<<<<<<<<<<< Breadcumb Area Start <<<<<<<<<<<<<<<<<<<< -->
            <div class="breadcumb_area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <ol class="breadcrumb d-flex align-items-center">
                                <li class="breadcrumb-item"><a href="#">Produtos</a></li>
                                <li class="breadcrumb-item"><a href="#">Proteção Cabeça</a></li>
                                <li class="breadcrumb-item active">Proteção Ocular</li>
                            </ol>
                            <!-- btn -->
                            <a href="#" class="backToHome d-block"><i class="fa fa-angle-double-left"></i>Voltar</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <<<<<<<<<<<<<<<<<<<< Breadcumb Area End <<<<<<<<<<<<<<<<<<<< -->

            <!-- <<<<<<<<<<<<<<<<<<<< Single Product Details Area Start >>>>>>>>>>>>>>>>>>>>>>>>> -->
            <section class="single_product_details_area section_padding_0_100">
                <div class="container">
                    <div class="row">

                        <div class="col-12 col-md-6">
                            <div class="single_product_thumb">
                                <div id="product_details_slider" class="carousel slide" data-ride="carousel">

                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#product_details_slider" data-slide-to="0" style="background-image: url(img/product-img/1.jpg);">
                                        </li>
                                        <li data-target="#product_details_slider" data-slide-to="1" style="background-image: url(img/product-img/1.jpg);">
                                        </li>
                                        <li data-target="#product_details_slider" data-slide-to="2" style="background-image: url(img/product-img/1.jpg);">
                                        </li>
                                        <li data-target="#product_details_slider" data-slide-to="3" style="background-image: url(img/product-img/1.jpg);">
                                        </li>
                                    </ol>

                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <a class="gallery_img" href="img/product-img/1.jpg">
                                                <img class="d-block w-100" src="img/product-img/1.jpg" alt="First slide">
                                            </a>
                                        </div>
                                        <div class="carousel-item">
                                            <a class="gallery_img" href="img/product-img/1.jpg">
                                                <img class="d-block w-100" src="img/product-img/1.jpg" alt="Second slide">
                                            </a>
                                        </div>
                                        <div class="carousel-item">
                                            <a class="gallery_img" href="img/product-img/1.jpg">
                                                <img class="d-block w-100" src="img/product-img/1.jpg" alt="Third slide">
                                            </a>
                                        </div>
                                        <div class="carousel-item">
                                            <a class="gallery_img" href="img/product-img/1.jpg">
                                                <img class="d-block w-100" src="img/product-img/1.jpg" alt="Fourth slide">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="single_product_desc">

                                <h4 class="title"><a href="#">ASO Smoke</a></h4>

                                <div class="widget size mb-50">
                                    
                                </div>

                                <!-- Add to Cart Form -->
                                <form class="cart clearfix mb-50 d-flex" method="post">
                                    <div class="quantity">
                                         <h6 class="widget-title">Pedir Orçamento</h6>
                                        <input type="text" class="qty-text" name="nome" value="Nome">
                                       
                                        <input type="text" class="qty-text" name="email" value="Email">
                                       
                                        <input type="text" class="qty-text" name="tel" value="Telemóvel">
                                       
                                        <input type="text" class="qty-text" value="Altura Letras (cm)" name="altura">
                                       
                                        <input type="text" class="qty-text" value="Nº de Letras" name="n_letra">
                                       
                                        <input type="text" class="qty-text" value="Tipo de Letra" name="t_letra">
                                        
                                        <input type="text" class="qty-text" value="Observações" name="t_letra">
                                        
                                        <button 
                                    </div>
                                   
                                </form>

                                <div id="accordion" role="tablist">
                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingOne">
                                            <h6 class="mb-0">
                                                <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Informação</a>
                                            </h6>
                                        </div>

                                        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus.</p>
                                                <p>Approx length 66cm/26" (Based on a UK size 8 sample) Mixed fibres</p>
                                                <p>The Model wears a UK size 8/ EU size 36/ US size 4 and her height is 5'8"</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingThree">
                                            <h6 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Envio e Devoluções</a>
                                            </h6>
                                        </div>
                                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse quo sint repudiandae suscipit ab soluta delectus voluptate, vero vitae, tempore maxime rerum iste dolorem mollitia perferendis distinctio. Quibusdam laboriosam rerum distinctio. Repudiandae fugit odit, sequi id!</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae qui maxime consequatur laudantium temporibus ad et. A optio inventore deleniti ipsa.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- <<<<<<<<<<<<<<<<<<<< Single Product Details Area End >>>>>>>>>>>>>>>>>>>>>>>>> -->
        
        
        
        
        
        
        <section class="single_product_details_area section_padding_0_100">
                <div class="container">
                    <div class="row">

                        <div class="col-12 col-md-6">
                            <div class="single_product_thumb">
                                <div id="product_details_slider" class="carousel slide" data-ride="carousel">

                               <img src="img/bordado.jpg" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="single_product_desc">

                              
                                
                                        <div class="card-header" role="tab" id="headingOne">
                                            <h6 class="mb-0">
                                                <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Bordados Personalizados</a>
                                            </h6>
                                        </div>

                                        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>O bordado é o sistema de personalização mais adequado para adicionar valor às suas peças. </p>
                                                <p>Garantimos bordados profissionais e personalizados, com a melhor qualidade ao preço justo. </p>
                                            </div>
                                        </div>
                                  

                              
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- <<<<<<<<<<<<<<<<<<<< Single Product Details Area End >>>>>>>>>>>>>>>>>>>>>>>>> -->
        
        
        
        
        

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
                                                <img src="img/product-img/product-1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-7">
                                            <div class="quickview_pro_des">
                                                <h4 class="title">Boutique Silk Dress</h4>
                                                <div class="top_seller_product_rating mb-15">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <h5 class="price">$120.99 <span>$130</span></h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia expedita quibusdam aspernatur, sapiente consectetur accusantium perspiciatis praesentium eligendi, in fugiat?</p>
                                                <a href="#">View Full Product Details</a>
                                            </div>
                                            <!-- Add to Cart Form -->
                                            <form class="cart" method="post">
                                                <div class="quantity">
                                                    <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>

                                                    <input type="number" class="qty-text" id="qty2" step="1" min="1" max="12" name="quantity" value="1">

                                                    <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                </div>
                                                <button type="submit" name="addtocart" value="5" class="cart-submit">Add to cart</button>
                                                <!-- Wishlist -->
                                                <div class="modal_pro_wishlist">
                                                    <a href="wishlist.html" target="_blank"><i class="ti-heart"></i></a>
                                                </div>
                                                <!-- Compare -->
                                                <div class="modal_pro_compare">
                                                    <a href="compare.html" target="_blank"><i class="ti-stats-up"></i></a>
                                                </div>
                                            </form>

                                            <div class="share_wf mt-30">
                                                <p>Share With Friend</p>
                                                <div class="_icon">
                                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ****** Quick View Modal Area End ****** -->

            <section class="you_may_like_area clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section_heading text-center">
                                <h2>Produtos Relacionados</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="you_make_like_slider owl-carousel">

                                <!-- Single gallery Item -->
                                <div class="single_gallery_item">
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
                                <div class="single_gallery_item">
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
                                <div class="single_gallery_item">
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
                                <div class="single_gallery_item">
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
                                <div class="single_gallery_item">
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
