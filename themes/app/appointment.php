<div class="background">
    <div class="circle">
<li> <img class="iconTwo" src="<?= url("themes/app/assets/img/compromissos.png"); ?>"/> </li>
</div>
<p class="pTitle"> Meus Compromissos </p>

</div>

<?php
    echo $this->layout("_themeTwo");
?>


   <div class="container">
    <button class="detailsbc">Adicionar Compromisso</button>

    <!-- Modal -->
    <div id="edit-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <main>
                <section class="add-appointment">
                    <h2>Adicionar Compromisso</h2>
                    <form id="appointmentForm">
                        <label for="title">Título:</label>
                        <input type="text" id="title" name="title" required>

                        <label for="date">Data:</label>
                        <input type="date" id="date" name="date" required>

                        <label for="time">Hora:</label>
                        <input type="time" id="time" name="time" required>

                        <label for="description">Descrição:</label>
                        <textarea id="description" name="description" rows="4" required></textarea>

                        <button type="submit">Adicionar</button>
                    </form>
                </section>
                
            </main>
        </div>
    </div>
    </div>  
    <div class="appointCard"> 

        <div class="appointment-card">
               <h3>Consulta</h3>
               <p><strong>Data:</strong> 2024-06-08</p>
               <p><strong>Hora:</strong> 00:27 </p>
               <p><strong>Descrição:</strong> Consulta com a paciente Maria</p>
           </div>

     </div>  


