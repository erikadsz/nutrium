<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

    <title> Nutrium - O serviço de gestão para sua clínica. </title>
    <script src="<?= url("themes/app/assets/scripts.js"); ?>"></script>
    <link rel="stylesheet" href="<?= url("themes/app/assets/styles.css"); ?>">

</head>
<body>
<menu>
<ul>
    <li> <img src="<?= url("themes/app/assets/img/logo2.png"); ?>" class="top"/> </li>
    <li class="liOne"> <a href="<?= url("app"); ?>"> Início </a> </li>
    <li class="liOne"> <a href="<?= url("app/#plans"); ?>"> Planos </a> </li>
    <li class="liOne"> <a href="<?= url("app/sobre"); ?>"> Sobre </a> </li>
    <li class="liOne"> <a href="<?= url("app/contato"); ?>"> Contato </a></li>
</ul>
<img src="<?= url("themes/app/assets/img/user.png"); ?>" class="signImg">

<div class="sign">
   <a href="<?= url("app/perfil");?>"> Olá, Fulano! <br> </a> 
</div>
</menu> 

<?php
    echo $this->section("content");
?> 

<footer>
<p>2024  © Todos os direitos reservados | Nutrium </p>
</footer>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
</body>
</html>
