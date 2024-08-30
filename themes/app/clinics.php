<div class="background">
    <div class="circle">
        <li><img class="iconTwo" src="<?= url("themes/app/assets/img/minhaClinica.png"); ?>" alt="Ícone da Clínica"/></li>
    </div>
    <p class="pTitle">Minhas Clínicas</p>
    <button class="detailsb">Adicionar clínica </button>

</div>

<?php
    echo $this->layout("_themeTwo");
?>

<div class="cardp">
    <div class="infoSection">
        <div class="descDiv">
            <p class="descTitle">CLÍNICA: TAL TAL TAL TAL TAL</p>
            <p class="desc">ENDEREÇO: TAL TAL TAL TAL TAL</p>
            <p class="desc">HORÁRIOS: Segunda-feira, Quarta-feira, Sexta-feira</p>
        </div>
    </div>
    <div class="detailsSection">
        <div class="pinContainer">
            <img class="pin" src="<?= url("themes/app/assets/img/pin.png"); ?>" alt="Pin"/>
        </div>
        <div class="descDiv2">
            <p class="desc">CONSULTA: Paciente - TAL TAL TAL (dia tal, hora tal)</p>
            <p class="desc">CONSULTA: Paciente - TAL TAL TAL (dia tal, hora tal)</p>
            <p class="desc">CONSULTA: Paciente - TAL TAL TAL (dia tal, hora tal)</p>
            <p class="desc">CONSULTA: Paciente - TAL TAL TAL (dia tal, hora tal)</p>
        </div>
    </div>
    <button class="details">Adicionar detalhes</button>
</div>
