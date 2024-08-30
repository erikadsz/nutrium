<div class="background">
    <div class="circle">
        <li><img class="iconTwo" src="<?= url("themes/app/assets/img/clientes.png"); ?>"/></li>
    </div>
    <p class="pTitle">Meus pacientes</p>
    <button class="addb">Adicionar paciente</button>
</div>

<?php
    echo $this->layout("_themeTwo");
?>

<div class="cardbContainer">
    <div class="cardb">
        <div class="infoSectionb">
            <div class="descDivb">
                <p class="descTitleb"> NOME COMPLETO </p>
                <p class="descb">NOME DA CLÍNICA QUE VAI</p>
                <p class="descb">PESO ATUAL: 80.9 KG</p>
                <p class="descb">MEDIDA DA CINTURA: XXXXXX </p>
                <p class="descb">MEDIDA DO QUADRIL: XXXXXX </p>
                <p class="descb">ALTURA: 1,70 m </p>
                <p class="descb">PESO IDEAL: XXXXX</p>
                <p class="descb">PLANO DE DIETA: XXXXX</p>

            </div>
        </div>
        <div class="detailsSectionb">
            <div class="pinContainerb">
                <img class="pinb" src="<?= url("themes/app/assets/img/userDois.png"); ?>" alt="Pin"/>
            </div>
        </div>
    </div>

    <div class="cardb">
        <div class="infoSectionb">
            <div class="descDivb">
                <p class="descTitleb"> NOME COMPLETO </p>
                <p class="descb">NOME DA CLÍNICA QUE VAI</p>
                <p class="descb">PESO ATUAL: 80.9 KG</p>
                <p class="descb">MEDIDA DA CINTURA: XXXXXX </p>
                <p class="descb">MEDIDA DO QUADRIL: XXXXXX </p>
                <p class="descb">ALTURA: 1,70 m </p>
                <p class="descb">PESO IDEAL: XXXXX</p>
                <p class="descb">PLANO DE DIETA: XXXXX</p>

            </div>
        </div>
        <div class="detailsSectionb">
            <div class="pinContainerb">
                <img class="pinb" src="<?= url("themes/app/assets/img/userDois.png"); ?>" alt="Pin"/>
            </div>
        </div>
    </div>
    <div id="edit-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="form-container">
        <form action="/submit" method="post">
            <div class="form-group">
                <label for="fullName">Nome Completo</label>
                <input type="text" id="fullName" name="fullName" required>
            </div>
            <div class="form-group">
                <label for="clinicName">Nome da Clínica</label>
                <input type="text" id="clinicName" name="clinicName" required>
            </div>
            <div class="form-group">
                <label for="currentWeight">Peso Atual (kg)</label>
                <input type="number" id="currentWeight" name="currentWeight" step="0.1" required>
            </div>
            <div class="form-group">
                <label for="waistMeasurement">Medida da Cintura (cm)</label>
                <input type="number" id="waistMeasurement" name="waistMeasurement" required>
            </div>
            <div class="form-group">
                <label for="hipMeasurement">Medida do Quadril (cm)</label>
                <input type="number" id="hipMeasurement" name="hipMeasurement" required>
            </div>
            <div class="form-group">
                <label for="height">Altura (m)</label>
                <input type="number" id="height" name="height" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="idealWeight">Peso Ideal (kg)</label>
                <input type="number" id="idealWeight" name="idealWeight" step="0.1" required>
            </div>
            <div class="form-group">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
        </div>
    </div>
</div>
