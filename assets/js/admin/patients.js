import {
    showDataForm,
    getBackendUrlApi,
    getBackendUrl,
    showToast,
    showDataSelect
} from "./../_shared/functions.js";


const patientsList = document.querySelector("#patient-body");
const patientsListId = document.querySelector("#patientId-body");

const modal = document.getElementById("clinic-edit-modal");
const closeModalButton = document.querySelector(".clinic-close-btn");
const editForm = document.getElementById("clinic-edit-form");
let currentClinicId = null;

//---------------------------------------------------------------

    fetch(`http://localhost/nutrium/api/patients/listpatients`)
        .then(response => response.json())
        .then(patients => {
            patientsList.innerHTML = ""; // Limpa a tabela
            patients.forEach(patient => {
                const newRow = document.createElement("tr");
                newRow.innerHTML = `
            
                 <td>${patient.patientId}</td>
                 <td>${patient.patientName}</td>
                 <td>${patient.patientClinicRegister}</td>
                 <td>${patient.patientEmail}</td>
                 <td>${patient.patientAdress }</td>

                `;
                patientsList.appendChild(newRow);
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
        const patientId = document.querySelector("#patientId").value
        fetch(`http://localhost/nutrium/api/patients/delete/${patientId}`, {
            method: "delete"  
        }).then(response => {
            return response.json();
        }).then(patient => {
            console.log(patient)
        });
        });

//---------------------------------------------------------------  

const formListId = document.querySelector("#formListId");
formListId.addEventListener("submit",(event)=>{
event.preventDefault();
const pacientForm = document.querySelector('input[name="pacientIdForm"]');
const pacientIdF = pacientForm.value;

fetch(`http://localhost/nutrium/api/patients/listbyid/${pacientIdF}`, {
        method: 'GET'
    }).then((response) => {
      response.json().then((patientl) => {
        if (patientl) {
          const e = patientl[0]; 
          patientsListId.innerHTML = ""; 
              const newRowId = document.createElement("tr");
              newRowId.innerHTML = `
                 <td>${e.patientName}</td>
                 <td>${e.patientClinicRegister}</td>
                 <td>${e.patientEmail}</td>
                 <td>${e.patientAdress}</td>
              `;
              patientsListId.appendChild(newRowId);
        
        } else {
          document.querySelector("#messageOfId").innerHTML = `Clínica de ID = ${pacientIdF} não foi encontrada.`;
        }
      });
    });
});


//---------------------------------------------------------------
const formCreatePatient = document.querySelector("#form-createPatient");
const patientName = document.querySelector("#patientName");
formCreatePatient.addEventListener("submit", async (e) => {
    e.preventDefault(); 
    fetch(`http://localhost/nutrium/api/patients/createpatient`, {
        method: "POST",
        body: new FormData(formCreatePatient)
       /* headers: {
            token: userAuth.token
        }*/
    }).then((response) => {
        
        response.json().then((data) => {
            let response = data
            console.log(`${patientName.value}`);
        });
    });
});


