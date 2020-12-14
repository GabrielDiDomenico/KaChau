<?php include_once "header.php"; ?>
    <main class="ps-main">
      <div class="ps-content pt-80 pb-80">
        <div class="ps-container">
          <div class="ps-cart-listing">
            <table class="table ps-cart__table">
              <thead>
                <tr>
                  <th>Todos produtos</th>
                  <th>Preço</th>
                  <th>Quantidade</th>
                  <th>Total</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a class="ps-product__preview" href="product-detail.html"><img class="mr-15" src="images/product/cart-preview/1.jpg" alt=""> exemplo 1</a></td>
                  <td>R$ 0</td>
                  <td>
                    <div class="form-group--number">
                      <button class="minus"><span>-</span></button>
                      <input class="form-control" type="text" value="2">
                      <button class="plus"><span>+</span></button>
                    </div>
                  </td>
                  <td>R$ 0</td>
                  <td>
                    <div class="ps-remove"></div>
                  </td>
                </tr>
                <tr>
                  <td><a class="ps-product__preview" href="product-detail.html"><img class="mr-15" src="images/product/cart-preview/2.jpg" alt=""> exemplo 2</a></td>
                  <td>R$ 0</td>
                  <td>
                    <div class="form-group--number">
                      <button class="minus"><span>-</span></button>
                      <input class="form-control" type="text" value="2">
                      <button class="plus"><span>+</span></button>
                    </div>
                  </td>
                  <td>R$ 0</td>
                  <td>
                    <div class="ps-remove"></div>
                  </td>
                </tr>
                <tr>
                  <td><a class="ps-product__preview" href="product-detail.html"><img class="mr-15" src="images/product/cart-preview/3.jpg" alt="">exemplo 3</a></td>
                  <td>R$ 0</td>
                  <td>
                    <div class="form-group--number">
                      <button class="minus"><span>-</span></button>
                      <input class="form-control" type="text" value="2">
                      <button class="plus"><span>+</span></button>
                    </div>
                  </td>
                  <td>R$ 0</td>
                  <td>
                    <div class="ps-remove"></div>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="ps-cart__actions">
              <div class="ps-cart__promotion">
                <div class="form-group">
                  <div class="ps-form--icon"><i class="fa fa-angle-right"></i>
                    <input class="form-control" type="text" placeholder="Código promocional">
                  </div>
                </div>
                <div class="form-group">
                  <button class="ps-btn ps-btn--gray">Continue Comprando</button>
                </div>
              </div>
              <div class="ps-cart__total">
                <h3>Preço total: <span>R$ 0</span></h3><a class="ps-btn" href="checkout.html">Finalizar compra<i class="ps-icon-next"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include_once "footer.php"; ?>