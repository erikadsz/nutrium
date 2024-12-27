<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="themes/web/assets/styles2.css">

    <script type="module" src="<?= url("assets/js/web/login.js"); ?>" async></script>

    <title> PetCare - O serviço de gestão para sua clínica. </title>
</head>
<body>
  <div id="back">
    <div id="divBowl">
    <img src="themes/web/assets/img/bowl4.png" id="imgBowl" />
    </div>
    <div id="loginOut">

    <div id="loginDiv">
    <img src="themes/web/assets/img/logoLogin.png" id="imgLogo"/>
    <h3> Faça seu login! </h3>
    <div id="toast-container"></div>
    <form id="formLogin" action=""> 
        <label for="first"> Email do Usuário: </label>
        <input type="email" id="first" name="email" placeholder="Email de Usuário">
        <label for="password"> Senha:</label>
        <input type="password" id="password" name="password" placeholder="Senha">
            <div class="wrap">
                <button type="submit"> ENTRAR </button>
            </div>
    </form>
        <p> Ainda não é assinante? </p> 
        <a href="<?= url("cadastro"); ?>" style="text-decoration: none;">
             INSCREVA-SE 
            </a>
        </div>
        </div>

  </div>
  <footer>
  </footer>
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
</body>
</html>
