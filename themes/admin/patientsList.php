<?php
    echo $this->layout("_theme");
?>
<script type="module" src="<?= url("assets/js/admin/patients.js"); ?>"></script>
<link rel="stylesheet" href="<?= url("themes/admin/assets/styles.css"); ?>">

<div class="container">
  <h2>Cadastro de Pacientes</h2>
  <form id="form-createPatient" method="POST">
    <div class="form-content">
      <div class="form-column">
        <label for="patientCpf">CPF do paciente:</label>
        <input type="text" id="patientCpf" name="patientCpf" class="patientCpf" placeholder="CPF do paciente" required>

        <label for="patientName">Nome do paciente:</label>
        <input type="text" id="patientName" name="patientName" class="patientName" placeholder="Nome do paciente" required>

        <label for="patientEmail">Email do paciente:</label>
        <input type="email" id="patientEmail" name="patientEmail" class="patientEmail" placeholder="Email do paciente" required>

        
        <label for="patientCity">Cidade do paciente:</label>
        <input type="text" id="patientCity" name="patientCity" class="patientCity" placeholder="Cidade do paciente" required>

        <label for="patientAdress">Endereço do paciente:</label>
        <input type="text" id="patientAdress" name="patientAdress" class="patientAdress" placeholder="Endereço do paciente" required>

        <label for="patientPayment">Forma de pagamento:</label>
        <input type="text" id="patientPayment" name="patientPayment" class="patientPayment" placeholder="Forma de pagamento" required>
      </div>

      <div class="form-column">
        <label for="patientClinicRegister">Registro na clínica:</label>
        <input type="text" id="patientClinicRegister" name="patientClinicRegister" class="patientClinicRegister" placeholder="Registro na clínica" required>

        <label for="patientDietRegister">Registro da dieta:</label>
        <input type="text" id="patientDietRegister" name="patientDietRegister" class="patientDietRegister" placeholder="Registro da dieta" required>

        <label for="patientPhoneNumber">Número de telefone:</label>
        <input type="text" id="patientPhoneNumber" name="patientPhoneNumber" class="patientPhoneNumber" placeholder="Número de telefone" required>

        <label for="patientWeight">Peso:</label>
        <input type="text" id="patientWeight" name="patientWeight" class="patientWeight" placeholder="Peso" required>

        <label for="patientHeight">Altura:</label>
        <input type="text" id="patientHeight" name="patientHeight" class="patientHeight" placeholder="Altura" required>
      </div>
    </div>

    <label for="fk_dietPlanId">ID do plano:</label>
    <input type="number" id="fk_dietPlanId" name="fk_dietPlanId" class="fk_dietPlanId" placeholder="ID do plano" required>

    <label for="fk_register">ID do registro:</label>
    <input type="number" id="fk_register" name="fk_register" class="IDregister" placeholder="ID do registro:" required>

    <button type="submit">Cadastrar paciente</button>
  </form>
</div>

<!---------------------------------------------------------------------------------------------------------------------------------> 

<div class="lista-usuarios">
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
    <h2 class="clinicedith2">Excluir Paciente</h2>
    <label for="clinic-edit-id">ID do paciente a ser excluido:</label>
    <input type="number" id="clinic-delete-id" name="clinic-id" class="clinic-input">
    <button id="confirm-delete-btn" class="clinic-submit-btn">Excluir</button>
    <button id="cancel-delete-btn" class="clinic-submit-btn">Cancelar</button>
  </div>
</div>

  <h2>Lista de Pacientes</h2>
  <form id="formDelete">
    <input type="number" name="patientId" id="patientId" placeholder="ID do Paciente">
    <button type="submit">Deletar</button>
</form>
    
    <table id="patient-table">
        <thead>
            <tr>
            <th>ID</th>
                <th>Nome</th>
                <th>Clínica</th>
                <th>Email</th>
                <th>Endereço</th>

            </tr>
        </thead>
        <tbody id="patient-body">
        </tbody>
    </table>

    <form id="formListId">

    <input type="number" name="pacientIdForm" id="pacientIdForm">
    <input type="submit" value="Procurar paciente">
</form> 
    <table id="patientId-table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody id="patientId-body">
        </tbody>
        <div id="messageOfId"></div>

    </table>
</div>
<!----------------------------------------------------------------------------------------------------------------------------------- -->
