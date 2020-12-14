<?php include_once('header.php'); ?>

<div class="ps-container pt-90"> 
  <div class="ps-section__header">
    <h2 class="ps-section__title" data-mask="Cadastro">- Peças</h2>
  </div>
  <div class="row mb-80">
    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 pt-40"></div>
    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
      <button style="background-color: #2AC37D; color: white; border:0px; margin-top:5px; margin-right:6px; padding: 10px;"> <i class="fa fa-plus" aria-hidden="true"></i> Adicionar</button>	
    </div>
  </div>
  <div class="tabela mb-80">
    <div class="row">
      <div class="col-lg-1 col-md-1 col-sm-0 col-xs-0" >
      </div>
      <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
      <center><b>Imagem</b></center>
      </div>	
      <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
      <center><b>Nome</b></center>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
      <center><b>Categoria</b></center>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">  
      <center><b>Status</b></center>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">  
      <center><b>Ação</b></center>
      </div>
      <div class="col-lg-1 col-md-1 col-sm-0 col-xs-0" >
      </div>
    </div>  
    <div class="row">
      <div class="col-lg-1 col-md-1 col-sm-0 col-xs-0" >
      </div>
      <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="background-color: #cccccc; padding: 5px;">
      <center>fetch_peca_thumb</center>
      </div>	
      <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="background-color: #cccccc; padding: 5px;">
      <center>fetch_peca_name</center>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="background-color: #cccccc; padding: 5px;">
      <center>fetch_peca_cat</center>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="background-color: #cccccc; padding: 5px;">  
      <center>fetch_peca_status</center>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="background-color: #cccccc; padding: 2px;">  
      <center><button>Alterar</button><button>Remover</button></center>
      </div>
      <div class="col-lg-1 col-md-1 col-sm-0 col-xs-0" >
      </div>
    </div> 
  </div>
</div>


<?php include_once('footer.php'); ?>