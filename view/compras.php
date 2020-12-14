<?php include_once('header.php'); $forma_pag=1;?>

<div class="ps-section pt-10 pb-80">
    <div class="ps-container">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0" >
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
                <div class="ps-section__header mb-30">
                    <h3 class="ps-section__title">- Sua Compra</h3>
                </div>
                <div class="card">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-0 col-xs-0" style="text-align:center;">
                            <i class="fa fa-shopping-cart fa-4x" aria-hidden="true" style="padding-top: 20%;"></i>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                            <div style="padding-top: 13%;">
                                <b>Nº do pedido</b><h3 style="color: #2AC37D;">fetch_id_pedido</h3><br>
                            </div>
                        </div>  
                        <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0" style="text-align:center;">
                            
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                            <div style="padding-top: 13%;">
                                Data:<h6>fetch_data</h6>
                            </div>
                        </div>  
                        <div class="col-lg-1 col-md-1 col-sm-0 col-xs-0" >
                        </div>    
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 pt-80" style="width: 30%; margin-top: 4px;">
                <div class="ps-section__header mb-40">
                    <h3 class="ps-section__title"></h3>
                </div>
                <div class="card">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <br>
                            <h6 style="margin-left: 5px; margin-right: 5px;">Subtotal: <span style="float: right!important;">fetch_buy_subtotal</span></h6>
                            <h6 style="margin-left: 5px; margin-right: 5px;">Frete: <span style="float: right!important;">fetch_buy_freight</span></h6>
                            <h6 style="margin-left: 5px; margin-right: 5px;">Cupom de desconto: <span style="float: right!important;">fetch_buy_cupon</span></h6><br>
                            <h6 style="margin-left: 5px; margin-right: 5px;">Desconto na forma de pagamento: <span style="float: right!important;">fetch_buy_discount</span></h6>
                            <br>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <hl/>
                            <h4 style="margin-left: 5px; margin-right: 5px;"><b>Total:</b><span style="float: right!important;"><b>fetch_buy_subtotal</b></span></h4>
                            <br>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0 ">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0" >
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
                <div class="mb-30" style="text-align:center;">
                    <h3>Forma de pagamento</h3>
                </div>
                <div class="card">
                    <?php if($forma_pag == 1){ ?>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-0 col-xs-0" style="text-align:center;">
                            <i class="fa fa-barcode fa-4x" aria-hidden="true" style="padding-top: 20%;"></i>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                            <div style="padding-top: 13%;">
                                Boleto<h6 >Um link com o boleto foi enviado para seu e-mail, com vencimento para <span style="color: #2AC37D;">fetch_vencimento</span></h6><br>
                            </div>
                        </div>  
                        <div class="col-lg-1 col-md-1 col-sm-0 col-xs-0" style="text-align:center;">
                            
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                            <div style="padding-top: 30%;">
                                <button style="border: none; border-radius: 5px; background-color: #2AC37D; color:white;">Imprimir boleto</button>
                            </div>
                        </div>  
                        <div class="col-lg-1 col-md-1 col-sm-0 col-xs-0" >
                        </div>    
                    </div>
                    <?php } ?>
                    <?php if($forma_pag == 2){ ?>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-0 col-xs-0" style="text-align:center;">
                            <i class="fa fa-credit-card-alt fa-4x" aria-hidden="true" style="padding-top: 20%;"></i>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                            <div style="padding-top: 13%;">
                                Cartão:<h6>fetch_vezes_cartao</h6>
                            </div>
                        </div>  
                        <div class="col-lg-1 col-md-1 col-sm-0 col-xs-0" style="text-align:center;">
                            
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                            <div style="padding-top: 8%;">
                                Titular do cartão:<h6>fetch_user_cpf</h6><h6>fetch_user_bin</h6><br>
                            </div>
                        </div>  
                        <div class="col-lg-1 col-md-1 col-sm-0 col-xs-0" >
                        </div>    
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 pt-90">
                
            </div>
            <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0 ">
            </div>
        </div>
        <?php if($forma_pag == 1){ ?> 
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0 ">
            </div>
            <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12 ">
                <div style="padding-top: 15%;">
                    Código:
                </div>
            </div>  
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                <div style="padding-top: 4%;">
                    fetch_cod_barras
                </div>
            </div>  
            <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12 ">
                <div style="padding-top: 15%;">
                    <button style="border: none; border-radius: 5px; background-color: #cccccc;">Copiar</button>
                </div> 
            </div> 
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
             
            </div>  
        </div>
        <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0 ">
            </div>
            <div class="col-lg-5 col-md-5 col-sm-0 col-xs-0 ">
                <hr/>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 "></div>  
        </div>
        <?php } ?>
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0" >
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-0 col-xs-0">
                        <div class="mb-30" style="text-align:center;">
                            <h3>Dados do Cliente</h3>
                        </div>
                        <div class="card" style="width:100%;">
                            <div class="row">
                                <div class="col-lg-1 col-md-1 col-sm-0 col-xs-0" style="text-align:center;">
                                </div>
                           
                                <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0" style="text-align:center;">
                                    <i class="fa fa-user fa-2x" aria-hidden="true" style="padding-top: 400%;"></i>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-0 col-xs-0" style="padding: 12.6% 12.6%;">
                                    <h5>fetch_username</h5>
                                    <h6>fetch_user_email</h6>
                                    <h6>CPF: fetch_user_cpf</h6>
                                    <h6>RG: fetch_user_RG</h6>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                        <div class="mb-30" style="text-align:center; margin-left: -30px;">
                            <h3>Dados da Entrega</h3>
                        </div>
                        <div class="card" style="margin-left: -20px; width:100%;">
                            <div class="row">
                                <div class="col-lg-1 col-md-1 col-sm-0 col-xs-0" style="text-align:center;">
                                </div>
                                
                                <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0" style="text-align:center;">
                                    <i class="fa fa-map-marker fa-2x" aria-hidden="true" style="padding-top: 400%;"></i>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-0 col-xs-0">
                                    <h5>fetch_address + fetch_complemento</h5>
                                    <h6>fetch_user_city</h6>
                                    <h6>fetch_user_cep</h6>
                                    <h6>fetch_buy_shiper</h6>
                                    <h6>fetch_buy_delivery_time</h6>
                                    <h6>Código de rastremento: fetch_buy_cod_rast</h6>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 pt-90">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0" >
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
                <div class="ps-section__header mb-30" style="text-align:center;">
                    <h3>Fluxo do seu pedido</h3>
                </div>
                <div class="card">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-0 col-xs-0" >
                            <p style="background-color: #cccccc; margin: 10px 10px 10px 10px; color: black;"><span style="margin-left:8px;"> fetch_order_info_data + fetch_order_info_hour </span><span style="float: right!important; margin-right:8px;"> fetch_order_info_status</span></p>
                            <p style="margin: 10px 10px 10px 10px; color: black;"><span style="margin-left:8px;"> fetch_order_info_data + fetch_order_info_hour </span><span style="float: right!important; margin-right:8px;"> fetch_order_info_status</span></p>
                            <p style="background-color: #cccccc; margin: 10px 10px 10px 10px; color: black;"><span style="margin-left:8px;"> fetch_order_info_data + fetch_order_info_hour </span><span style="float: right!important; margin-right:8px;"> fetch_order_info_status</span></p>
                        </div>    
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 pt-90">  
            </div>
            <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0 ">
            </div>
        </div>
    </div>
</div>

<?php include_once('footer.php'); ?>

