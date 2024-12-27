<?php
    echo $this->layout("_theme");
?>
<script type="module" src="<?= url("assets/js/admin/clinics.js"); ?>"></script>
<link rel="stylesheet" href="<?= url("themes/admin/assets/styles.css"); ?>">

<!-----------------------------------------------------cadastro--------------------------------------------------------------------------------------------->

<div class="container">
    <h2>Cadastro de Clínicas</h2>
    <form id="form-createClinic" method="POST">
        <label for="clinicName">Nome da clínica:</label>
        <input type="text" id="clinicName" name="clinicName" class="clinicName" placeholder="Nome da clínica" required>

        <label for="clinicAdress">Endereço da clínica:</label>
        <input type="text" id="clinicAdress" name="clinicAdress" class="clinicAdress" placeholder="Endereço da clínica" required>

        <label for="clinicPhoneNumber">Número de telefone:</label>
        <input type="text" id="clinicPhoneNumber" name="clinicPhoneNumber" class="clinicPhoneNumber" placeholder="Número de telefone" required>

        <button type="submit">Cadastrar clínica</button>
    </form>
</div>

<!-----------------------------------------------------listagem completa + editar + excluir ---------------------------------------------------------------------------------->

<div class="lista-usuarios">
    <!-- modal para editar clínica -->
<div id="clinic-edit-modal" class="clinic-modal">
  <div class="clinic-modal-content">
    <span class="clinic-close-btn">&times;</span>
    <h2 class="clinicedith2">Editar Clínica</h2>
    <form id="clinic-edit-form" class="clinic-form">
    <label for="clinic-edit-id">ID da Clínica a ser atualizada:</label>
<input type="number" id="clinic-edit-id" name="clinic-id" class="clinic-input">
      <label for="clinic-edit-name">Nome da Clínica:</label>
      <input type="text" id="clinic-edit-name" name="clinic-name" class="clinic-input" required>
      <label for="clinic-edit-address">Endereço da Clínica:</label>
      <input type="text" id="clinic-edit-address" name="clinic-address" class="clinic-input" required>
      <label for="clinic-edit-phone">Número de Telefone:</label>
      <input type="text" id="clinic-edit-phone" name="clinic-phone" class="clinic-input" required>
      <button type="submit" class="clinic-submit-btn">Salvar Alterações</button>
    </form>
  </div>
</div>

    <!-- modal para deletar clínica | nao to usando agora -->

<div id="clinic-delete-modal" class="clinic-modal">
  <div class="clinic-modal-content">
    <span class="clinic-close-btn">&times;</span>
    <h2 class="clinicedith2">Excluir Clínica</h2>
    <label for="clinic-edit-id">ID da Clínica a ser excluida:</label>
    <input type="number" id="clinic-delete-id" name="clinic-id" class="clinic-input">
    <button id="confirm-delete-btn" class="clinic-submit-btn">Excluir</button>
    <button id="cancel-delete-btn" class="clinic-submit-btn">Cancelar</button>
  </div>
</div>

    <!-- form para deletar clínica -->
<form id="formDelete">
    <input type="number" name="clinicId" id="clinicId">
    <input type="submit" value="Excluir clinica">
</form>
    
    <h2>Lista de Clínicas</h2>
    <button class="create-btn"> INSERIR CLÍNICA </button>
    <button class="edit-btn"> EDITAR </button>
    <button class="delete-btn"> DELETAR </button>

    <table id="clinics-table">
        <thead>
            <tr>
            <th>ID</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Telefone</th>

            </tr>
        </thead>
        <tbody id="clinica-body">
        </tbody>
    </table>


<form id="formListId">

    <input type="number" name="clinicIdForm" id="clinicIdForm">
    <input type="submit" value="Procurar clinica">
</form> 
    <table id="clinicsId-table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody id="clinicaId-body">
        </tbody>
        <div id="messageOfId"></div>

    </table>

</div>

