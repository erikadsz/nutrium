<?php
    echo $this->layout("_theme");
?>
<script type="module" src="<?= url("assets/js/admin/users.js"); ?>"></script>
<link rel="stylesheet" href="<?= url("themes/admin/assets/styles.css"); ?>">

<!-----------------------------------------------------cadastro--------------------------------------------------------------------------------------------->

<div class="container">
    <h2>Cadastro de Usuários</h2>
    <form id="form-createUser" method="POST">
        <label for="name">Nome do Usuário:</label>
        <input type="text" id="name" name="name" class="name" placeholder="Nome do Usuário" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" class="email" placeholder="Email" required>

        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" class="password" placeholder="Senha" required>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" class="cpf" placeholder="CPF" required>

        <label for="city">Cidade:</label>
        <input type="text" id="city" name="city" class="city" placeholder="Cidade" required>

        <label for="address">Endereço:</label>
        <input type="text" id="address" name="address" class="address" placeholder="Endereço" required>

        <label for="fk_payPlan">ID do plano:</label>
        <input type="number" id="fk_payPlan" name="fk_payPlan" class="fk_payPlan" placeholder="ID do plano" required>

    <label for="fk_appointmentId">ID do plano:</label>
    <input type="number" id="fk_appointmentId" name="fk_appointmentId" class="fk_appointmentId" placeholder="ID dos compromissos" required>

    <label for="fk_clinic">ID do plano:</label>
    <input type="number" id="fk_clinic" name="fk_clinic" class="fk_clinic" placeholder="ID da clínica " required>

        <button type="submit">Cadastrar Usuário</button>
    </form>
    
</div>

<!-----------------------------------------------------listagem completa + editar + excluir ----------------------------------------------------------------------------------->

<div class="lista-usuarios">
    <!-- modal para editar usuário 
    <div id="user-edit-modal" class="user-modal">
        <div class="user-modal-content">
            <span class="user-close-btn">&times;</span>
            <h2 class="useredith2">Editar Usuário</h2>
            <form id="user-edit-form" class="user-form">
                <label for="user-edit-id">ID do Usuário a ser atualizado:</label>
                <input type="number" id="user-edit-id" name="user-id" class="user-input">
                <label for="user-edit-name">Nome do Usuário:</label>
                <input type="text" id="user-edit-name" name="user-name" class="user-input" required>
                <label for="user-edit-email">Email:</label>
                <input type="email" id="user-edit-email" name="user-email" class="user-input" required>
                <label for="user-edit-cpf">CPF:</label>
                <input type="text" id="user-edit-cpf" name="user-cpf" class="user-input" required>
                <label for="user-edit-city">Cidade:</label>
                <input type="text" id="user-edit-city" name="user-city" class="user-input" required>
                <label for="user-edit-address">Endereço:</label>
                <input type="text" id="user-edit-address" name="user-address" class="user-input" required>
                <button type="submit" class="user-submit-btn">Salvar Alterações</button>
            </form>
        </div>
    </div>
-->
 

    <h2>Lista de Usuários</h2>


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

<!-- form para deletar usuario -->
<!-- <form id="formDelete"> -->
<input type="number" name="userId" id="userId" placeholder="ID do Usuário a ser excluído">
<input type="submit" id="deleteButton" value="Excluir Usuário">
<!-- </form> -->
   

<table id="users-table">
    <thead>
        <tr>
        <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>CPF</th>
        </tr>
    </thead>
    <tbody id="user-body">
    </tbody>
    <div id="messageOfId"></div>
</table>


<form id="formListId">

<input type="number" name="userIdForm" id="userIdForm">
<input type="submit" value="Procurar usuário">
</form> 
<table id="userId-table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Endereço</th>
            <th>CPF</th>
        </tr>
    </thead>
    <tbody id="user-bodyId">
    </tbody>
    <div id="messageOfId"></div>

</table>


</div>
