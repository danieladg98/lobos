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

            <!-- ****** Checkout Area Start ****** -->
            <div class="checkout_area section_padding_20">
                <div class="container">
                    <div class="row">

                        <div class="col-12 col-md-6">
                            <div class="checkout_details_area mt-50 clearfix">

                                <div class="cart-page-heading">
                                    <h5>Endereço de Faturação</h5>
                                    <p>Insira os seus dados de Faturação</p>
                                </div>

                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="first_name">Primeiro Nome <span>*</span></label>
                                            <input type="text" class="form-control" id="first_name" value="" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="last_name">Último Nome <span>*</span></label>
                                            <input type="text" class="form-control" id="last_name" value="" required>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="company">Nome Empresa</label>
                                            <input type="text" class="form-control" id="company" value="">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="country">País <span>*</span></label>
                                            <select class="custom-select d-block w-100" id="country">
                                        <option value="usa">Portugal</option>
                                        <option value="uk">Espanha</option>
                                        <option value="ger">França</option>
                                    </select>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="street_address">Morada <span>*</span></label>
                                            <input type="text" class="form-control mb-3" id="street_address" value="">
                                            <input type="text" class="form-control" id="street_address2" value="">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="postcode">Código Postal <span>*</span></label>
                                            <input type="text" class="form-control" id="postcode" value="">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="city">Cidade <span>*</span></label>
                                            <input type="text" class="form-control" id="city" value="">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="phone_number">Telemóvel <span>*</span></label>
                                            <input type="number" class="form-control" id="phone_number" min="0" value="">
                                        </div>
                                        <div class="col-12 mb-4">
                                            <label for="email_address">Email<span>*</span></label>
                                            <input type="email" class="form-control" id="email_address" value="">
                                        </div>

                                        <div class="col-12">
                                            <div class="custom-control custom-checkbox d-block mb-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Terms and conitions</label>
                                            </div>
                                            <div class="custom-control custom-checkbox d-block mb-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2">Criar Conta</label>
                                            </div>
                                            <div class="custom-control custom-checkbox d-block">
                                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                <label class="custom-control-label" for="customCheck3">Subscribe to our newsletter</label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
                            <div class="order-details-confirmation">

                                <div class="cart-page-heading">
                                    <h5>A Sua Encomenda</h5>
                                    <p>Detalhes</p>
                                </div>

                                <ul class="order-details-form mb-4">
                                    <li><span>Produto</span> <span>Total</span></li>
                                    <li><span>ASO Smoke</span> <span>00.00€</span></li>
                                    <li><span>Subtotal</span> <span>00.00€</span></li>
                                    <li><span>Custos de Envio</span> <span>Grátis</span></li>
                                    <li><span>Total</span> <span>00.00€</span></li>
                                </ul>


                                <div id="accordion" role="tablist" class="mb-4">
                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingOne">
                                            <h6 class="mb-0">
                                                <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><i class="fa fa-circle-o mr-3"></i>Paypal</a>
                                            </h6>
                                        </div>

                                        <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingTwo">
                                            <h6 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa fa-circle-o mr-3"></i>Pagamento no Ato da Entrega</a>
                                            </h6>
                                        </div>
                                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quis in veritatis officia inventore, tempore provident dignissimos.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingThree">
                                            <h6 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="fa fa-circle-o mr-3"></i>Cartão de Crédito</a>
                                            </h6>
                                        </div>
                                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse quo sint repudiandae suscipit ab soluta delectus voluptate, vero vitae</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingFour">
                                            <h6 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour"><i class="fa fa-circle-o mr-3"></i>Transferência Bancária</a>
                                            </h6>
                                        </div>
                                        <div id="collapseFour" class="collapse show" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est cum autem eveniet saepe fugit, impedit magni.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <a href="#" class="btn karl-checkout-btn">Finalizar encomenda</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- ****** Checkout Area End ****** -->

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
