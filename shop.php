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
                                                <li data-toggle="collapse" data-target="#cabeca">
                                                    <a href="#">PROTECÇÃO DA CABEÇA</a>
                                                    <ul class="sub-menu collapse show" id="cabeca">
                                                        <li data-toggle="collapse" data-target="#ocular" class="collapsed">
                                                            <a href="#">Protecção Ocular</a>
                                                            <ul class="sub-menu collapse" id="ocular" class="collapsed">
                                                                <li><a href="#">Óculos com Hastes</a></li>
                                                                <li><a href="#">Óculos panorâmicos</a></li>
                                                                <li><a href="#">Soldadura</a></li>
                                                                <li><a href="#">Viseiras</a></li>
                                                            </ul>
                                                        </li>
                                                        <li data-toggle="collapse" data-target="#cranio" class="collapsed">
                                                            <a href="#">Protecção do Crânio</a>
                                                            <ul class="sub-menu collapse" id="cranio" class="collapsed">
                                                                <li><a href="#">Capacetes de estaleiro</a></li>
                                                                <li><a href="#">Bonés anti-choque</a></li>
                                                                <li><a href="#">Accesórios capacetes - Marcado</a></li>
                                                            </ul>
                                                        </li>
                                                        <li data-toggle="collapse" data-target="#aud" class="collapsed">
                                                            <a href="#">Proteção Auditiva</a>
                                                            <ul class="sub-menu collapse" id="aud" class="collapsed">
                                                                <li><a href="#">Abafadores anti-ruído</a></li>
                                                                <li><a href="#">Tampões de ouvidos descartáveis</a></li>
                                                                <li><a href="#">Tampões de ouvidos reutilizáveis</a></li>
                                                            </ul>
                                                        </li>
                                                        <li data-toggle="collapse" data-target="#resp" class="collapsed">
                                                            <a href="#">Proteção Respiratória</a>
                                                            <ul class="sub-menu collapse" id="resp" class="collapsed">
                                                                <li><a href="#">Respiratória descartável</a></li>
                                                                <li><a href="#">Respiratória reutilizável</a></li>
                                                            </ul>
                                                        </li>

                                                    </ul>
                                                </li>

                                                <!-- Single Item -->
                                                <li data-toggle="collapse" data-target="#maos" class="collapsed">
                                                    <a href="#">PROTECÇÃO DAS MÃOS</a>
                                                    <ul class="sub-menu collapse" id="maos">
                                                        <li data-toggle="collapse" data-target="#luvas_high" class="collapsed">
                                                            <a href="#">Luvas High-tech</a>
                                                            <ul class="sub-menu collapse" id="luvas_high" class="collapsed">
                                                                <li><a href="#">Manutenção cortante</a></li>
                                                                <li><a href="#">Trabalhos anti estáticos</a></li>
                                                                <li><a href="#">Trabalhos de precisão</a></li>
                                                                <li><a href="#">Manipulação em entorno oleoso</a></li>
                                                                <li><a href="#">Manutenção geral</a></li>
                                                            </ul>
                                                        </li>
                                                        <li data-toggle="collapse" data-target="#luvas_sinteticas" class="collapsed">
                                                            <a href="#">Luvas Sintéticas</a>
                                                            <ul class="sub-menu collapse" id="luvas_sinteticas" class="collapsed">
                                                                <li><a href="#">Trabalhos pesados</a></li>
                                                                <li><a href="#">Trabalhos com resistência química</a></li>
                                                                <li><a href="#">Trabalhos em indústria</a></li>
                                                                <li><a href="#">Uso único</a></li>
                                                            </ul>
                                                        </li>
                                                        <li data-toggle="collapse" data-target="#luvas_pele" class="collapsed">
                                                            <a href="#">Luvas de pele</a>
                                                            <ul class="sub-menu collapse" id="luvas_pele" class="collapsed">
                                                                <li><a href="#">Manipulação em entorno húmido</a></li>
                                                                <li><a href="#">Manutenção geral</a></li>
                                                                <li><a href="#">Manipulação em entorno frio</a></li>
                                                                <li><a href="#">Trabalhos de soldadura</a></li>
                                                            </ul>
                                                        </li>
                                                        <li data-toggle="collapse" data-target="#luvas_texteis" class="collapsed">
                                                            <a href="#">Luvas têxteis</a>
                                                            <ul class="sub-menu collapse" id="luvas_texteis" class="collapsed">
                                                                <li><a href="#">Manutenção anti corte e anti calor</a></li>
                                                                <li><a href="#">Pequenas manipulações</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <!-- Single Item -->
                                                <li data-toggle="collapse" data-target="#corpo" class="collapsed">
                                                    <a href="#">PROTECÇÃO DO CORPO</a>
                                                    <ul class="sub-menu collapse" id="corpo">
                                                        <li data-toggle="collapse" data-target="#vest_trab" class="collapsed">
                                                            <a href="#"> Vestuário de Trabalho</a>
                                                            <ul class="sub-menu collapse" id="vest_trab" class="collapsed">
                                                                <li><a href="#">Bonés - Cinturões - Joelheiras</a></li>
                                                                <li><a href="#">Lady</a></li>
                                                                <li><a href="#">D-Mach</a></li>
                                                                <li><a href="#">Mach 5</a></li>
                                                                <li><a href="#">Mach 2</a></li>
                                                                <li><a href="#">Mach 2 Corporate</a></li>
                                                                <li><a href="#">Panostyle</a></li>
                                                                <li><a href="#">Painter</a></li>
                                                                <li><a href="#">Palaos</a></li>
                                                                <li><a href="#">Mach Spring</a></li>
                                                            </ul>
                                                        </li>
                                                        <li data-toggle="collapse" data-target="#vest_tec" class="collapsed">
                                                            <a href="#">Vestuário Técnico</a>
                                                            <ul class="sub-menu collapse" id="vest_tec" class="collapsed">
                                                                <li><a href="#">Alta visibilidade Workwear</a></li>
                                                                <li><a href="#">Alta visibilidade Outdoor</a></li>
                                                                <li><a href="#">Frio extremo</a></li>
                                                                <li><a href="#">Lenhadores</a></li>
                                                                <li><a href="#">Anti-ácidos - Anti-fogo - Anti-estático</a></li>
                                                                <li><a href="#">Anti-fogo</a></li>
                                                                <li><a href="#">Anti-fogo - Anti-estático</a></li>
                                                                <li><a href="#">Aventais de protecção</a></li>
                                                                <li><a href="#">Soldador</a></li>
                                                            </ul>
                                                        </li>
                                                        <li data-toggle="collapse" data-target="#vest_int" class="collapsed">
                                                            <a href="#">Vestuário Intempérie</a>
                                                            <ul class="sub-menu collapse" id="vest_int" class="collapsed">
                                                                <li><a href="#">Parkas e blusões</a></li>
                                                                <li><a href="#">Calças</a></li>
                                                                <li><a href="#">Coletes</a></li>
                                                                <li><a href="#">Polares - Softshell - Sweats - Camisola</a></li>
                                                                <li><a href="#">Gorros - Bonés - Luvas</a></li>
                                                                <li><a href="#">Polos - T-shirts - Roupa interior</a></li>
                                                                <li><a href="#">Chuva</a></li>
                                                            </ul>
                                                        </li>
                                                        <li data-toggle="collapse" data-target="#vest_unico" class="collapsed">
                                                            <a href="#">Vestuário Uso Único</a>
                                                            <ul class="sub-menu collapse" id="vest_unico" class="collapsed">
                                                                <li><a href="#">Fatos para protecções químicas</a></li>
                                                                <li><a href="#">Fatos - Batas - Aventais - Toucas</a></li>
                                                                <li><a href="#">Máscaras de higiene - Manguitos - Cobre sapatos</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>


                                                <!-- Single Item -->
                                                <li data-toggle="collapse" data-target="#pes" class="collapsed">
                                                    <a href="#">PROTECÇÃO DOS PÉS</a>
                                                    <ul class="sub-menu collapse" id="pes">
                                                        <li data-toggle="collapse" data-target="#calcado" class="collapsed">
                                                            <a href="#">Calçado</a>
                                                            <ul class="sub-menu collapse" id="calcado" class="collapsed">
                                                                <li><a href="#">Trek Work</a></li>
                                                                <li><a href="#">Waterproof</a></li>
                                                                <li><a href="#">X-run</a></li>
                                                                <li><a href="#">Outdoor</a></li>
                                                                <li><a href="#">Comfort Tech</a></li>
                                                                <li><a href="#">Pro Tech</a></li>
                                                                <li><a href="#">Sportswear</a></li>
                                                                <li><a href="#">Light Walkers</a></li>
                                                                <li><a href="#">City</a></li>
                                                                <li><a href="#">Executive</a></li>
                                                                <li><a href="#">Lady</a></li>
                                                                <li><a href="#">Agro</a></li>
                                                                <li><a href="#">4 X 4 Industry</a></li>
                                                                <li><a href="#">X-Large Composite</a></li>
                                                                <li><a href="#">X-Large Industry</a></li>
                                                                <li><a href="#">Classic +</a></li>
                                                                <li><a href="#">Classic Industry</a></li>
                                                            </ul>
                                                        </li>
                                                        <li data-toggle="collapse" data-target="#botas" class="collapsed">
                                                            <a href="#">Botas</a>
                                                            <ul class="sub-menu collapse" id="botas" class="collapsed">
                                                                <li><a href="#">Winter Boot</a></li>
                                                                <li><a href="#">Rain Boot</a></li>
                                                            </ul>
                                                        </li>
                                                        <li data-toggle="collapse" data-target="#acessorios" class="collapsed">
                                                            <a href="#">Acessórios</a>
                                                            <ul class="sub-menu collapse" id="acessorios" class="collapsed">
                                                                <li><a href="#">Palmilhas - Cordões - Meias</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <!-- Single Item -->
                                                <li data-toggle="collapse" data-target="#quedas" class="collapsed">
                                                    <a href="#">PROTECÇÃO ANTI-QUEDAS</a>
                                                    <ul class="sub-menu collapse" id="quedas">
                                                        <li data-toggle="collapse" data-target="#prensao_corpo" class="collapsed">
                                                            <a href="#"> Preensão do Corpo</a>
                                                            <ul class="sub-menu collapse" id="prensao_corpo" class="collapsed">
                                                                <li><a href="#">Arnês anti-quedas</a></li>
                                                                <li><a href="#">Arnês anti-quedas e de suspensão</a></li>
                                                            </ul>
                                                        </li>
                                                        <li data-toggle="collapse" data-target="#sist_quedas" class="collapsed">
                                                            <a href="#">Sistemas Anti-quedas</a>
                                                            <ul class="sub-menu collapse" id="sist_quedas" class="collapsed">
                                                                <li><a href="#">Cabos absorvedores de energia</a></li>
                                                                <li><a href="#">Anti-quedas com curso de retorno automático</a></li>
                                                                <li><a href="#">Anti-quedas sobre cordain </a></li>
                                                                <li><a href="#">Anti-quedas sobre cabo </a></li>
                                                                <li><a href="#">Kits </a></li>
                                                                <li><a href="#">Acessórios e sacos de armazenamento </a></li>
                                                            </ul>
                                                        </li>
                                                        <li data-toggle="collapse" data-target="#ancoragem" class="collapsed">
                                                            <a href="#">Ancoragem - Manutenção no trabalho</a>
                                                            <ul class="sub-menu collapse" id="ancoragem" class="collapsed">
                                                                <li><a href="#">Sistemas de manutenção no trabalho</a></li>
                                                                <li><a href="#">Dispositivos de ancoragem </a></li>
                                                                <li><a href="#">Cabos </a></li>
                                                                <li><a href="#">Spiderline II® </a></li>
                                                                <li><a href="#">Accesórios anti-quedas </a></li>
                                                            </ul>
                                                        </li>
                                                        <li data-toggle="collapse" data-target="#sist_conexao" class="collapsed">
                                                            <a href="#">Sistemas de conexão</a>
                                                            <ul class="sub-menu collapse" id="sist_conexao" class="collapsed">
                                                                <li><a href="#">Conectores</a></li>
                                                            </ul>
                                                        </li>
                                                            <li data-toggle="collapse" data-target="#suspensao" class="collapsed">
                                                            <a href="#">Suspensão</a>
                                                            <ul class="sub-menu collapse" id="suspensao" class="collapsed">
                                                                <li><a href="#">Trabalhos sobre corda</a></li>
                                                            </ul>
                                                        </li>
                                                           <li data-toggle="collapse" data-target="#salvamento" class="collapsed">
                                                            <a href="#">Salvamento</a>
                                                            <ul class="sub-menu collapse" id="salvamento" class="collapsed">
                                                                <li><a href="#">Anti-queda e salvamento, espaço confinado</a></li>
                                                                  <li><a href="#">Salvamento e evacuação</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <!-- Single Item -->
                                                <li data-toggle="collapse" data-target="#bordados" class="collapsed">
                                                    <a href="#">BORDADOS</a>
                                                    <ul class="sub-menu collapse" id="bordados">
                                                        <li><a href="#">Premium</a></li>
                                                        <li><a href="#">Evolution</a></li>
                                                        <li><a href="#">Essential</a></li>
                                                    </ul>
                                                </li>
                                                <!-- Single Item -->
                                                <li data-toggle="collapse" data-target="#reclamos" class="collapsed">
                                                    <a href="#">RECLAMOS LUMINOSOS</a>

                                                    <ul class="sub-menu collapse" id="reclamos">

                                                        <li data-toggle="collapse" data-target="#caixas" class="collapsed">
                                                            <a href="#">Caixas de Luz</a>
                                                        </li>
                                                        <li data-toggle="collapse" data-target="#letras" class="collapsed">
                                                            <a href="#">Letras Monobloco</a>                                            
                                                        </li>
                                                        <li data-toggle="collapse" data-target="#monolito" class="collapsed">
                                                            <a href="#">Monolito</a>                                                           
                                                        </li>
                                                        <li data-toggle="collapse" data-target="#totems" class="collapsed">
                                                            <a href="#">Totems</a>
                                                        </li>
                                                        <li data-toggle="collapse" data-target="#l" class="collapsed">
                                                            <a href="#">Sistema L</a>
                                                        </li>
                                                        <li data-toggle="collapse" data-target="#t" class="collapsed">
                                                            <a href="#">Sistema T</a>                                                           
                                                        </li>
                                                        <li data-toggle="collapse" data-target="#cubos" class="collapsed">
                                                            <a href="#">Cubos</a>
                                                        </li>
                                                        <li data-toggle="collapse" data-target="#torres" class="collapsed">
                                                            <a href="#">Torres</a>
                                                            <ul class="sub-menu collapse" id="torres" class="collapsed">
                                                                <li><a href="#">Torre</a></li>
                                                            </ul>
                                                        </li>
                                                        <li data-toggle="collapse" data-target="#personalizado" class="collapsed">
                                                            <a href="#">Personalizados</a>
                                                        </li>
                                                        <li data-toggle="collapse" data-target="#planas" class="collapsed">
                                                            <a href="#">Letras Planas</a>
                                                        </li>
                                                        <li data-toggle="collapse" data-target="#monopostes" class="collapsed">
                                                            <a href="#">Monopostes</a>
                                                        </li>
                                                    </ul>
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
