<?php include_once('header.php'); ?>

    <div class="ps-container">
        <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-0 col-xs-0 ">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
            <div class="ps-section__header pt-50">

            <form class="ps-contact__form" action="do_action" method="post">
                <div class="form-group">
                <label>Nome do produto <sub>*</sub></label>
                <input class="form-control" type="text" placeholder="fetch_product_name"> 
                </div>
                <div class="form-group">
                <label>Valor <sub>*</sub></label>
                <input class="form-control" type="text" placeholder="fetch_product_value"> 
                </div>
                <div class="form-group">
                <label>Breve descrição <sub>*</sub></label>
                <input class="form-control" type="text" placeholder="fetch_product_description"> 
                </div>
                <div class="form-group">
                <label>Informações do produto <sub>*</sub></label>
                <textarea class="form-control">fetch_product_info</textarea>
                </div>
                <div class="form-group">
                <label>Imagem <sub>*</sub></label>
                <input class="form-control" type="file" placeholder=""> 
                </div>
               
                <div class="form-group">
                <button class="ps-btn">Cadastrar produto<i class="ps-icon-next"></i></button>
                </div>
            </form>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-0 col-xs-0 ">
        </div>
        </div>
    </div>

<br/><br/>
<?php include_once('footer.php'); ?>