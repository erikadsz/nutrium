
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>


    <title> Nutrium - O serviço de gestão para sua clínica. </title>
    <link rel="stylesheet" href="themes/web/assets/styles.css">
    <script src="themes/web/assets/scripts.js"></script>

</head>
<body>
<menu>
<ul>
    <li> <img src="themes/web/assets/img/logo2.png" class="top"/> </li>
    <li class="liOne"> <a href="<?= url();?>"> Início </a> </li>
<li class="liOne"> <a href="<?= url("#plans");?>"> Planos </a> 
    </li>
    <li class="liOne"> <a href="<?= url("sobre"); ?>"> Sobre </a> 
    </li>
    <li class="liOne"> <a href="<?= url("contato"); ?>"> Contato </a></li>

<!-- <ul class="dropdown">
    <li> <a href="#"> Agenda </a> </li>
    <li> <a href="#"> Pacientes </a> </li>
    <li> <a href="#"> Pagamentos </a> </li>
        </ul>
-->
 </ul>
 <img src="themes/web/assets/img/user.png" class="signImg">

   <div class="sign">
   <a href="<?= url("login");?>">Faça seu login! <br> </a> 
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
