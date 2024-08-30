<?php
    echo $this->layout("_theme");
?>
 <div class="container-slider">
    <button id="prev-button"><img src="themes/app/assets/img/arrow.png" alt="prev-button"></button>
    <div class="container-images">
      <img src="<?= url("themes/app/assets/img/14.png"); ?>" class="slider on" alt="image1">
      <img src="<?= url("themes/app/assets/img/15.png"); ?>" class="slider" alt="image2">
    </div>
    <button id="next-button"><img src="<?= url("themes/app/assets/img/arrow.png"); ?>" alt="next-button">
    </button>
    </div>
  

  <div id="contentTwo">
    <div class="content">
      <h1>Seja bem vindo, administrador! </h1>

      <div class="cardDois">
        <div class="contentCardDois">

          <div class="cardDois-front">
          <p class="frontp"> APP </p>

          <img src="<?= url("themes/admin/assets/img/come.png"); ?>" class="imgCard">
          </div>

          <div class="cardDois-back">
            <p class="comeback"> Voltar para a área restrita</p>
          </div>

        </div>
      </div>

      <div class="cardDois">
        <div class="contentCardDois">
        <div class="cardDois-front">
        <p class="frontp"> WEB </p>

        <img src="<?= url("themes/admin/assets/img/come.png"); ?>" class="imgCard">
          </div>
          <div class="cardDois-back">
          <p class="comeback"> Voltar para a área pública </p>
          </div>
        </div>
      </div>

     
    </div>
  </div>
