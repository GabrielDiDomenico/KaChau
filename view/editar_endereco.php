<?php include_once('header.php'); ?>

<div class="ps-container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-0 col-xs-0 ">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
          <div class="ps-section__header pt-50">
          <h2 class="ps-section__title" data-mask="Endereço">-Editar Endereço</h2>
          <form class="ps-contact__form" action="do_action" method="post">
              <div class="form-group">
              <label>Nome <sub>*</sub></label>
              <input class="form-control" type="text" placeholder="fetch_endereco_name"> 
              </div>
              <div class="form-group">
              <label>CEP <sub>*</sub></label>
              <input class="form-control" type="text" placeholder="fetch_endereco_cep"> 
              </div>
              <div class="form-group">
              <label>Endereço <sub>*</sub></label>
              <input class="form-control" type="text" placeholder="fetch_endereco_rua"> 
              </div>
              <div class="form-group">
              <label>Número <sub>*</sub></label>
              <input class="form-control" type="text" placeholder="fetch_endereco_num"> 
              </div>
              <div class="form-group">
              <label>Complemento <sub>*</sub></label>
              <input class="form-control" type="text" placeholder="fetch_endereco_compl"> 
              </div>
              <div class="form-group">
              <label>Bairro <sub>*</sub></label>
              <input class="form-control" type="text" placeholder="fetch_endereco_bairro">
              </div>
              <div class="form-group">
              <label>Cidade <sub>*</sub></label>
              <input class="form-control" type="text" placeholder="fetch_endereco_cidade">
              </div>
              <div class="form-group">
              <label>Estado <sub>*</sub></label>
              <input class="form-control" type="text" placeholder="fetch_endereco_estado">
              </div>
              <br>
              <div class="form-group">
              <button class="ps-btn">Atualizar endereço<i class="ps-icon-next"></i></button>
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