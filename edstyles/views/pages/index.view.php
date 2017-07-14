<?php include_once APP_PATH .'views/partials/head.view.php' ?>
<?php include_once APP_PATH .'views/partials/header.view.php' ?>
    <!-- El slider es propio del homepage-->
    <div class="l-slider">
      <div class="ed-container">
        <div class="ed-item">
          <img src="<?= PUBLIC_PATH ?>/img/banner.jpg"/>
        </div>
      </div>
    </div>

    <div class="l-main ed-container">
      <div class="ed-item">
        <h2 class="productos__title">Productos destacados</h2>
        <div class="productos-container">
          <div class="productos">
            <?php foreach($articles as $article): ?>
              <div class="producto">
                <h3 class="producto__title"><?= $article->name ?></h3>
                <a href="polo-ed2.html">
                  <img src="<?= PUBLIC_PATH ?>img/<?= $article->image ?>" class="producto__img"/>
                </a>
                <p class="producto__price icon-cart"><?= $article->price ?></p>
              </div>
            <?php endforeach ?>
            
          </div>
        </div>
        <?php include_once APP_PATH .'views/partials/social.view.php' ?>
      
      </div>
    </div>
<?php include_once APP_PATH .'views/partials/foot.view.php' ?>
