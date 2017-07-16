<?php include_once APP_PATH .'views/partials/head.view.php' ?>
<?php include_once APP_PATH .'views/partials/header.view.php' ?>
<div class="l-main ed-container">
      <div class="ed-item">
        <h1>Contacto</h1>
        <?php if(isset($errorMessage)): ?>
        <div class="ed-container error">
          <ed-item class="center web-4-8">
            <?= $errorMessage ?>
          </ed-item>
        </div>
        <?php endif ?>
        <form method="post" action="<?= PUBLIC_PATH ?>contacto" class="ed-container web-60 contact-form">
          <div class="ed-item web-30">
            <label for="nombre">Nombres y apellidos</label>
          </div>
          <div class="ed-item web-70">
            <input type="text" name="name" id="name" value="<?= $name ?? ''?>"/>
          </div>
          <div class="ed-item web-30">
            <label for="email">Correo electrónico</label>
          </div>
          <div class="ed-item web-70">
            <input type="email" name="email" id="email" value="<?= $email ?? ''?>"/>
          </div>
          <div class="ed-item">
            <label for="message">Su mensaje</label>
          </div>
          <div class="ed-item">
            <textarea name="message" id="message"><?= $message ?? ''?></textarea>
          </div>
          <div class="ed-item web-30">
            <img src="<?= $captcha->inline() ?>" alt="Captcha" />
          </div>
          <div class="ed-item web-70">
            <input type="text" name="captcha" id="captcha" placeholder="Escriba el texto e la imagen" required/>
          </div>
          <div class="ed-item">
            <button type="submit">Enviar</button>
            <!-- <input type="submit" value="Enviar"/> -->
          </div>
        </form>
      </div>
    </div>
    <?php include_once APP_PATH .'views/partials/foot.view.php' ?>