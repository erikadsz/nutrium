<?php
    echo $this->layout("_theme");
?>
<script type="module" src="<?= url("assets/js/admin/clinics.js"); ?>"></script>
<link rel="stylesheet" href="<?= url("themes/admin/assets/styles.css"); ?>">

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
