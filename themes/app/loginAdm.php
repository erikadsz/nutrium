<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="<?= url("themes/app/assets/styles3.css"); ?>">
    <script src="<?= url("themes/app/assets/scripts2.js"); ?>"></script>

    <title> PetCare - O serviço de gestão para sua clínica. </title>
</head>
<body>
  <div id="back">
    <div id="divBowl">
    <img src="<?= url("themes/app/assets/img/bowl4.png")?>" id= "imgBowl">
    </div>
    <div id="loginOut">

    <div id="loginDiv">
    <img src="<?= url("themes/app/assets/img/logoLogin.png")?>" id= "imgLogo">


<form action="" class="loginForm"> 
        <label for="first"> Nome do Administrador: </label>
        <input type="text" id="first" name="first" placeholder="Nome de Usuário" required>
        <label for="password"> Senha:</label>
        <input type="password" id="password" name="password" placeholder="Senha" required>
            <div class="wrap">
                <button type="submit"><a href="<?= url("admin"); ?>"> ENTRAR </a></button>
            </div>
</form>
        
        </div>
        </div>

  </div>
  <footer>
  </footer>
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
</body>
</html>
