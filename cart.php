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


            <!-- ****** Cart Area Start ****** -->
            <div class="cart_area section_padding_20 clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="cart-table clearfix">
                                <table class="table table-responsive">
                                    <thead>
                                        <tr>
                                          <th class="product-remove">&nbsp;</th>
				                                  <th class="product-thumbnail">Produto</th>
				                                  <th class="product-name">&nbsp;</th>
				                                  <th class="product-price">Preço</th>
                                          <th class="product-quantity">Quantidade</th>
				                                  <th class="product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="cart_product_img d-flex align-items-center">
                                                <a href="#"><img src="img/product-img/1.jpg" alt="Product"></a>
                                                <h6>ASO Smoke</h6>
                                            </td>
                                            <td class="price"><span>00.00€</span></td>
                                            <td class="qty">
                                                <div class="quantity">
                                                    <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                    <input type="number" class="qty-text" id="qty" step="1" min="1" max="99" name="quantity" value="1">
                                                    <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                </div>
                                            </td>
                                            <td class="total_price"><span>00.00€</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="cart-footer d-flex mt-30">
                                <div class="back-to-shop w-50">
                                    <a href="shop-grid-left-sidebar.html">Continuar compra</a>
                                </div>
                                <div class="update-checkout w-50 text-right">
                                    <a href="#">Limpar Carro</a>
                                    <a href="#">Atualizar Carro</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="shipping-method-area mt-70">
                                <div class="cart-page-heading">
                                    <h5>Método de Envio</h5>
                                    <p>Selecione o método de envio pretendido</p>
                                </div>

                                <div class="custom-control custom-radio mb-30">
                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label d-flex align-items-center justify-content-between" for="customRadio1"><span>Envio Expresso</span><span>4.99€</span></label>
                                </div>

                                <div class="custom-control custom-radio mb-30">
                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label d-flex align-items-center justify-content-between" for="customRadio2"><span>Envio Standard</span><span>1.99€</span></label>
                                </div>

                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label d-flex align-items-center justify-content-between" for="customRadio3"><span>Levantamento na Loja</span><span>Grátis</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">

                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="cart-total-area mt-70">
                                <div class="cart-page-heading">
                                    <h5>Total</h5>
                                    <p>Informação final</p>
                                </div>

                                <ul class="cart-total-chart">
                                    <li><span>Subtotal</span> <span>00.00€</span></li>
                                    <li><span>Custos de Envio</span> <span>Grátis</span></li>
                                    <li><span><strong>Total</strong></span> <span><strong>00.00€</strong></span></li>
                                </ul>
                                <a href="checkout.html" class="btn karl-checkout-btn">Finalizar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ****** Cart Area End ****** -->


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
