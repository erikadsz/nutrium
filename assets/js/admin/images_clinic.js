import {
    showDataForm,
    getBackendUrlApi, getBackendUrl, showToast
} from "./../_shared/functions.js";

import {
    userAuth
} from "./../_shared/globals.js";

const response = await fetch(getBackendUrlApi('clinics/listclinics'), {
    method: "get"
});
const clinics = await response.json(); 

const selectClinic = document.querySelector("#clinic_id");
clinics.forEach((clinic) => {
    const option = document.createElement("option");
    option.value = clinic.id;
    option.textContent = clinic.id + " - " + clinic.name;
    selectClinic.appendChild(option);
});

const formInsertImages = document.querySelector("#formImages");

formInsertImages.addEventListener("submit", async (e) => {
    e.preventDefault();
    const formData = new FormData(formInsertImages); 

    try {
        const response = await fetch(getBackendUrlApi("images/insert"), {
            method: "POST",
            body: formData,
            headers: {
                token: userAuth.token
            }
        });

        const data = await response.json();
        
        if (data.type === "error") {
            showToast(`${data.message}!`, "error");
        } else {
            showToast(`${data.message}!`, "success");
            // Opcional: adicione um reload da página aqui se desejar
        }
    } catch (error) {
        console.error("Erro ao enviar a imagem:", error);
        showToast("Erro ao enviar a imagem", "error");
    }
});