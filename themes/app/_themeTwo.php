<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <script src="<?= url("themes/app/assets/scripts2.js"); ?>"></script>


    <title> Nutrium - O serviço de gestão para sua clínica. </title>
    <link rel="stylesheet" href="<?= url("themes/app/assets/stylesdois.css"); ?>">
</head>
<body>

<menu>
<ul>
    <li class="liTwo"> <a href="<?= url("app/perfil"); ?>"> Perfil </a> </li>
    <li class="liTwo"> <a href="<?= url("app/clinics"); ?>"> Clínicas </a> </li>
    <li class="liTwo"> <a href="<?= url("app/patient"); ?>"> Pacientes </a> </li>
    <li class="liTwo"> <a href="<?= url("app/appointment"); ?>"> Compromissos </a></li>
    <li class="liTwo"> <a href="<?= url("app/diets"); ?>"> Dietas </a></li>

</ul>

</menu> 

<?php
    echo $this->section("content");
?> 

<footer class="foot">
<p>2024  © Todos os direitos reservados | Nutrium </p>
</footer>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
</body>
</html>
