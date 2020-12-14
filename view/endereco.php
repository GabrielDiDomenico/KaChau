<?php include_once('header.php'); ?>
<div class="bloco_endereco">
  <div class="row pt-80">
      <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0" >
      </div>
      <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color: #999999;">
            <h4 class="pt-10">fetch_endereco_name</h4><br>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color: #f2f2f2;">
          <br>
            <p>fetch_endereco_rua + fetch_endereco_num</p>
            <p>fetch_endereco_comp</p>
            <p>fetch_endereco_bairo + fetch_endereco_cidade + fetch_endereco_estado</p>
            <p>CEP: fetch_endereco_cep</p>
          </div>
        </div>
        <div class="row mb-30">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <button style="border:0px; float: right!important; margin-top:5px;"> Remover</button>
            <button style="background-color: #2AC37D; border:0px; float: right!important; margin-top:5px; margin-right:6px;"> Editar</button>	
          </div>	
        </div>
      </div>	
      
      <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0" >
      </div>
  </div>
  
</div>
<div class="row mb-80">
  <div class="col-lg-3 col-md-3 col-sm-0 col-xs-0" >
  </div>
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <button style="background-color: #2AC37D; color: white; border:0px; margin-top:5px; margin-right:6px; padding: 10px;"> Adicionar novo Endereço</button>	
  </div>
  <div class="col-lg-3 col-md-3 col-sm-0 col-xs-0" >
  </div>	
</div>
<?php include_once('footer.php'); ?>