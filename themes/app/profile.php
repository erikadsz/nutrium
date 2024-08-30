
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= url("themes/app/assets/stylesdois.css"); ?>">

    
    <title> perfil </title>
</head>
<div class="background"></div>
<div class="userContainer">
    <img class="userPhoto" src="<?=url("themes/app/assets/img/userDois.png");?>">
    <h1 class="userh1">Usuário</h1>
    <button class="botaotwo"><a href="<?= url("app/loginAdm"); ?>"> Área do administrador </a></button>
    <div class="editProfile">
        <img class="editPhoto" src="<?=url("themes/app/assets/img/editPhoto3.png");?>">
    </div>
</div>


<div class="cardOptions">
    <div class="optionsC"> <img class="photoClass" src="<?=url("themes/app/assets/img/minhaClinica.png");?>">
    <a class="optionsA" href="<?= url("app/clinics");?>"> Minhas Clínicas  </a> </div>
    <div class="optionsC"> <img class="photoClass" src="<?=url("themes/app/assets/img/clientes.png");?>">
    <a class="optionsA" href="<?= url("app/patient");?>"> Pacientes </a> 
    </div>
    <div class="optionsC"> <img class="photoClass" src="<?=url("themes/app/assets/img/compromissos.png");?>">
    <a class="optionsA" href="<?= url("app/appointment"); ?>"> Compromissos </a> 
    </div>
    <div class="optionsC"> <img class="photoClass" src="<?=url("themes/app/assets/img/diets.png");?>">
    <a class="optionsA" href="<?= url("app/diets"); ?>"> Lista de dietas </a>
    </div>
 </div>

<footer>
<p>2024  © Todos os direitos reservados | Nutrium </p>
</footer>
<!-- Modal -->
<div id="editProfileModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Editar Perfil</h2>
    <form id="formProfileModal">
      <label for="username">Nome:</label>
      <input type="text" id="username" name="username"><br><br>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email"><br><br>
      <label for="photo">Foto de Perfil:</label>
      <input type="file" id="photo" name="photo"><br><br>
      <input type="submit" value="Salvar">
    </form>
  </div>
</div>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
</body>
</html>



</body>
</html>