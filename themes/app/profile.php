<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= url("themes/app/assets/stylesdois.css"); ?>">
    <script type="module" src="<?= url("assets/js/app/profile.js"); ?>" async></script>
    <title>Perfil</title>
</head>
<body>


<div class="background"></div>
<div class="userContainer">

    <img class="userPhoto" src="">
    <h1 class="userh1">Usuário</h1>
    <button class="botaotwo"><a href="<?= url("app/loginAdm"); ?>">Área do administrador</a></button>
    
    <!-- Botão para editar perfil -->
    <div class="editProfile" onclick="openModal('editPhotoModal')">
        <img class="editPhoto" src="<?=url("themes/app/assets/img/editPhoto3.png");?>" alt="Editar perfil">
    </div>

    <!-- Botão para editar foto de perfil -->
  <!--  <button class="editPhotoButton" onclick="openModal('editPhotoModal')">Editar Foto de Perfil</button> -->
</div>

<div class="cardOptions">
    <div class="optionsC"> <img class="photoClass" src="<?=url("themes/app/assets/img/minhaClinica.png");?>">
    <a class="optionsA" href="<?= url("app/clinics");?>"> Minhas Clínicas </a> </div>
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
    <p>2024 © Todos os direitos reservados | Nutrium</p>
</footer>

<div id="editProfileModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal('editProfileModal')">&times;</span>
    <h2>Editar Perfil</h2>
    <form id="profile"> 
      <label for="username">Nome de usuário:</label>
      <input type="text" id="name" name="name"><br><br>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email"><br><br>
      <label for="password">Endereço:</label>
      <input type="address" id="password" name="address"><br><br>
      <input type="submit" value="Salvar">
    </form>
  </div>
</div>

<div id="editPhotoModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal('editPhotoModal')">&times;</span>
    <h2>Editar Foto de Perfil</h2>
    <form id="formPhoto">
      <label for="photo">Foto de Perfil:</label>
      <input type="file" id="photo" name="pfp"><br><br>
      
      <button id="savePhoto">Salvar...</button>
    </form>
  </div>
</div>

<script>
    function openModal(modalId) {
        document.getElementById(modalId).style.display = "block";
    }

    function closeModal(modalId) {
        document.getElementById(modalId).style.display = "none";
    }

    // Fechar modal ao clicar fora dela
    window.onclick = function(event) {
        const modals = ["editProfileModal", "editPhotoModal"];
        modals.forEach(modalId => {
            const modal = document.getElementById(modalId);
            if (event.target === modal) {
                modal.style.display = "none";
            }
        });
    }
</script>

</body>
</html>
