<?php include_once('header.php'); ?>

<!-- Modal -->
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="ps-section__title">-Trocar Senha</h2>
      </div>
      <div class="modal-body">
        <div class="ps-container">
          <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                <div class="ps-section__header">
                  <form class="ps-contact__form" action="do_action" method="post">
                      <div class="form-group">
                      <label>Senha Atual<sub>*</sub></label>
                      <input class="form-control" type="password" placeholder="">
                      </div>
                      <div class="form-group">
                      <label>Senha Nova<sub>*</sub></label>
                      <input class="form-control" type="password" placeholder="">
                      </div>
                      <div class="form-group">
                      <label>Repita Senha Nova<sub>*</sub></label>
                      <input class="form-control" type="password" placeholder="">
                      </div>
                      <div class="form-group">
                      <button class="ps-btn">Trocar senha<i class="ps-icon-next"></i></button>
                      </div>
                  </form>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-0 col-xs-0 ">
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<div class="ps-blog-grid pt-80 pb-80">
        <div class="ps-container">
          <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 ">
                </div>  
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
                      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                        <div class="ps-post mb-30">
                          <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="blog-detail.html"></a><img src="images/blog/3.jpg" alt=""></div>
                          <div class="ps-post__content"><a href="blog-detail.html">Suas compras</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                        <div class="ps-post mb-30">
                          <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="blog-detail.html"></a><img src="images/blog/3.jpg" alt=""></div>
                          <div class="ps-post__content"><a href="blog-detail.html">Seu cadastro</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                        <div class="ps-post mb-30">
                          <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="#" data-toggle="modal" data-target="#Modal"></a><img src="images/blog/3.jpg" alt=""></div>
                          <div class="ps-post__content"><a href="#" data-toggle="modal" data-target="#Modal">Trocar senha</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                        <div class="ps-post mb-30">
                          <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="blog-detail.html"></a><img src="images/blog/3.jpg" alt=""></div>
                          <div class="ps-post__content"><a href="blog-detail.html">Lista de desejos</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                        <div class="ps-post mb-30">
                          <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="blog-detail.html"></a><img src="images/blog/3.jpg" alt=""></div>
                          <div class="ps-post__content"><a href="blog-detail.html">Meus endereços</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                        <div class="ps-post mb-30">
                          <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="blog-detail.html"></a><img src="images/blog/3.jpg" alt=""></div>
                          <div class="ps-post__content"><a href="blog-detail.html">Tickets</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                        <div class="ps-post mb-30">
                          <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="blog-detail.html"></a><img src="images/blog/3.jpg" alt=""></div>
                          <div class="ps-post__content"><a href="blog-detail.html">Sair</a>
                          </div>
                        </div>
                      </div>
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 ">
                    </div>  
                </div>
               
                  
                 
                 
                  
                  
                  
                </div>
          </div>
        </div>
      </div>

<?php include_once('footer.php'); ?>

