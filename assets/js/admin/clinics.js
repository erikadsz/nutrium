import {
    showDataForm,
    getBackendUrlApi,
    getBackendUrl,
    showToast,
    showDataSelect
} from "./../_shared/functions.js";


const createButton = document.querySelector(".createClinic");
const listaClinicas = document.querySelector("#clinica-body");
const listaClinicasId = document.querySelector("#clinicaId-body");

const modal = document.getElementById("clinic-edit-modal");
const closeModalButton = document.querySelector(".clinic-close-btn");
const editForm = document.getElementById("clinic-edit-form");
let currentClinicId = null;

//---------------------------------------------------------------

    fetch(`http://localhost/nutrium/api/clinics/listclinics`)
        .then(response => response.json())
        .then(clinics => {
            listaClinicas.innerHTML = ""; // Limpa a tabela
            clinics.forEach(clinic => {
                const newRow = document.createElement("tr");
                newRow.innerHTML = `
                
                     <td>  ${clinic.clinicId}</td>
                    <td>${clinic.clinicName}</td>
                    <td>${clinic.clinicAdress}</td>
                    <td>${clinic.clinicPhoneNumber}</td>
               
                `;
                listaClinicas.appendChild(newRow);
            });
        });

//---------------------------------------------------------------

function openModal() {
    modal.style.display = "block"; 
}
function closeModal() {
    modal.style.display = "none"; 
}
closeModalButton.addEventListener("click", closeModal);
window.addEventListener("click", (event) => {
    if (event.target == modal) {
        closeModal();
    }
});

//---------------------------------------------------------------

const formDelete =  document.querySelector("#formDelete");
formDelete.addEventListener("submit", (e) => {
    e.preventDefault();
    const clinicId = document.querySelector("#clinicId").value
    fetch(`http://localhost/nutrium/api/clinics/removeclinic/${clinicId}`, {
        method: "delete"  
    }).then(response => {
        return response.json();
    }).then(clinic => {
        console.log(clinic)
    });
});


//---------------------------------------------------------------  

const formListId = document.querySelector("#formListId");
formListId.addEventListener("submit",(event)=>{
event.preventDefault();
const clinicIdForm = document.querySelector('input[name="clinicIdForm"]');
const clinicIdF = clinicIdForm.value;

fetch(`http://localhost/nutrium/api/clinics/listclbyid/${clinicIdF}`, {
        method: 'GET'
    }).then((response) => {
      response.json().then((clinicl) => {
        if (clinicl) {
          const e = clinicl[0]; 
          listaClinicasId.innerHTML = ""; 
              const newRowId = document.createElement("tr");
              newRowId.innerHTML = `
                  <td>${e.clinicName}</td>
                  <td>${e.clinicAdress}</td>
                  <td>${e.clinicPhoneNumber}</td>
              `;
              listaClinicasId.appendChild(newRowId);
        
        } else {
          document.querySelector("#messageOfId").innerHTML = `Clínica de ID = ${clinicIdF} não foi encontrada.`;
        }
      });
    });
});


//---------------------------------------------------------------

const formCreateClinic = document.querySelector("#form-createClinic");
const clinicName = document.querySelector("#clinicName");
formCreateClinic.addEventListener("submit", async (e) => {
    e.preventDefault();
    fetch(`http://localhost/nutrium/api/clinics/createclinic`, {
        method: "POST",
        body: new FormData(formCreateClinic)
       /* headers: {
            token: userAuth.token
        }*/
    }).then((response) => {
        
        response.json().then((data) => {
            let response = data
            console.log(`${clinicName.value}`);
        });
    });
});

