<?php include_once APP_PATH .'views/partials/head.view.php' ?>
<?php include_once APP_PATH .'views/partials/header.view.php' ?>
<div class="l-main ed-container">
      <div class="ed-item">
        <h1><?= $article->name ?></h1>
        <div class="ed-container product__page">
          <div class="ed-item tablet-50"><img src="<?= PUBLIC_PATH ?>img/<?= $article->image ?>" class="product__page__img"/></div>
          <div class="ed-item tablet-50 product__page__description">
            <p><?= $article->description ?></p>
              <div class="ed-container product__page__data">
                <div class="ed-item main-center">
                  <h3 class="product__page__size">
                    Precio: <?= $article->priceFloat ?> USD
                  </h3>
                </div>


                
               <!--  <div class="ed-item main-center">
                  <h3 class="product__page__color">Color: negro</h3>
                </div> -->
                <form class="ed-item main-center" target="paypal" name="_xclick" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                  <input type="hidden" name="cmd" value="_cart">
                  <!-- <input type="hidden" name="hosted_button_id" value="4LR989S5J8E5E"> -->
                  <input type="hidden" name="business" value="samuel_-_rojas@hotmail.com">
                  <input type="hidden" name="currency_code" value="USD">
                  <input type="hidden" name="item_name" value="<?= $article->name ?>" />
                  <input type="hidden" name="amount" value="<?= $article->priceFloat ?>" />
                  <input type="hidden" name="add" value="1" />
                  <input type="hidden" name="charset" value="uf-8"/>
                  
                  <input type="hidden" name="on0" value="Talla" />

                  <?php if(!$article->sizes->isEmpty()): ?>
                      <div class="ed-item main-center">
                        <h3 class="product__page__size">
                          <label for="os0">Talla: </label>
                          <select name="os0" id="os0">
                            <?php foreach($article->sizes as $size): ?>
                              <option value="<?= $size->name ?>"><?= $size->name ?></option>
                            <?php endforeach ?>
                          </select>
                        </h3>
                      </div>
                  <?php endif ?>
                  <button type="submit" class="boton icon-cart espacio product__page__buy">
                    Añadir al carrito
                  </button>
                  <!-- <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea."> -->
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                </form>
                <!-- <div class="ed-item main-center"><a href="#" class="boton icon-cart espacio product__page__buy">Comprar</a></div> -->
                <div class="ed-item main-center product__page__share">
                  <!--Created by Álvaro on 11/3/2016.
                  -->
                  <div class="sociales"><a href="http://facebook.com" class="icon-facebook"></a><a href="http://twitter.com" class="icon-twitter"></a><a href="http://instagram.com" class="icon-instagram"></a><a href="http://pinterest.com" class="icon-pinterest"></a></div>
                </div>
              </div>
            </p>
          </div>
        </div>
      </div>
    </div>
<?php include_once APP_PATH .'views/partials/foot.view.php' ?>