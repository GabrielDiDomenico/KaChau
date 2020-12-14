<?php include_once "header.php"; ?>
    <main class="ps-main">
      <div class="ps-content pt-80 pb-80">
        <div class="ps-container">
          <div class="ps-cart-listing ps-table--compare">
            <table class="table ps-cart__table">
              <tbody>
                <tr>
                  <td>Produtos</td>
                  <td><a class="ps-product__preview text-uppercase" href="product-detail.html"><img class="mr-15" src="images/product/cart-preview/3.jpg" alt=""> exemplo 1</a></td>
                  <td><a class="ps-product__preview text-uppercase" href="product-detail.html"><img class="mr-15" src="images/product/cart-preview/3.jpg" alt=""> exemplo 2</a></td>
                </tr>
                <tr>
                  <td>Preços</td>
                  <td><span class="price">R$0</span></td>
                  <td><span class="price">R$0</span></td>
                </tr>
                <tr>
                  <td>Avaliação UserBenchmark</td>
                  <td>
                   fetch_avaliacao_produto
                  </td>
                  <td>
                  fetch_avaliacao_produto
                  </td>
                </tr>
                <tr>
                  <td>Disponibilidade</td>
                  <td><span class="status in-stock">em estoque</span></td>
                  <td><span class="status">fora de estoque</span></td>
                </tr>
                <tr>
                  <td>Pedido</td>
                  <td><a class="ps-btn" href="#">Adicione ao carrinho<i class="ps-icon-next"></i></a><a class="ps-product-favorite ml-10" href="whishlist.html"><i class="ps-icon-heart"></i></a></td>
                  <td><a class="ps-btn" href="#">Adicione ao carrinho<i class="ps-icon-next"></i></a><a class="ps-product-favorite ml-10" href="whishlist.html"><i class="ps-icon-heart"></i></a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <?php include_once "footer.php"; ?>