




document.addEventListener('DOMContentLoaded', () => {
    const botao = document.querySelector(".detailsbc");
    const modal = document.getElementById("edit-modal");
    const closeModalButton = document.querySelector(".close");

    // Abre a modal
    botao.addEventListener("click", () => {
        modal.style.display = "block";
        console.log("oi")
    });

    // Fecha a modal quando o botão de fechar é clicado
    closeModalButton.addEventListener("click", () => {
        modal.style.display = "none";
    });

    // Fecha a modal quando o usuário clica fora da modal
    window.addEventListener("click", (event) => {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });

    // Adiciona o novo compromisso ao clicar no botão "Adicionar"
    document.getElementById('appointmentForm').addEventListener('submit', function(e) {
        e.preventDefault(); // Evita o envio padrão do formulário

        const title = document.getElementById('title').value;
        const date = document.getElementById('date').value;
        const time = document.getElementById('time').value;
        const description = document.getElementById('description').value;

        // Cria um novo cartão de compromisso
        const card = document.createElement('div');
        card.className = 'appointment-card';
        card.innerHTML = `
            <h3>${title}</h3>
            <p><strong>Data:</strong> ${date}</p>
            <p><strong>Hora:</strong> ${time}</p>
            <p><strong>Descrição:</strong> ${description}</p>
        `;

        // Adiciona o novo cartão à lista de compromissos
        document.querySelector('.appointCard').appendChild(card);

        this.reset();

        modal.style.display = 'none';
    });
});


document.addEventListener('DOMContentLoaded', () => {
    const addMealButton = document.querySelector(".add-meal-button");
    const modal = document.getElementById("add-meal-modal");
    const closeModalButton = document.querySelector(".close-modal");

    addMealButton.addEventListener("click", () => {
        modal.style.display = "flex";
    });

    closeModalButton.addEventListener("click", () => {
        modal.style.display = "none";
    });

    window.addEventListener("click", (event) => {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });

    document.getElementById('meal-form').addEventListener('submit', function(e) {
        e.preventDefault(); 

        const mealName = document.getElementById('meal-name').value;
        const mealType = document.getElementById('meal-type').value;
        const mealCalories = document.getElementById('meal-calories').value;
        const mealDescription = document.getElementById('meal-description').value;

        const card = document.createElement('div');
        card.className = 'meal-card';
        card.innerHTML = `
            <h3>${mealName}</h3>
            <p class="type"><strong>Tipo:</strong> ${mealType}</p>
            <p><strong>Calorias:</strong> ${mealCalories}</p>
            <p class="description"><strong>Descrição:</strong> ${mealDescription}</p>
        `;

        document.getElementById('meals-container').appendChild(card);

        this.reset();


        modal.style.display = 'none';
    });
});
