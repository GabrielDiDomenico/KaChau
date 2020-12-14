<?php include_once('header.php'); ?>

    <div class="ps-container">
        <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-0 col-xs-0 ">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
            <div class="ps-section__header pt-50">
            <h2 class="ps-section__title">- Altere seu Cadastro</h2>
            <form class="ps-contact__form" action="do_action" method="post">
                <div class="form-group">
                <label>Nome Completo <sub>*</sub></label>
                <input class="form-control" type="text" placeholder=""> 
                </div>
                <div class="form-group">
                <label>Data de Nascimento <sub>*</sub></label>
                <input class="form-control" type="text" placeholder=""> 
                </div>
                <div class="form-group">
                <label>CPF <sub>*</sub></label>
                <input class="form-control" type="text" placeholder=""> 
                </div>
                <div class="form-group">
                <label>Celular <sub>*</sub></label>
                <input class="form-control" type="text" placeholder=""> 
                </div>
                <div class="form-group">
                <label>Email <sub>*</sub></label>
                <input class="form-control" type="text" placeholder=""> 
                </div>
                <div class="form-group">
                <label>Senha <sub>*</sub></label>
                <input class="form-control" type="password" placeholder="">
                </div>
                <div class="form-group">
                <button class="ps-btn">Alterar<i class="ps-icon-next"></i></button>
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