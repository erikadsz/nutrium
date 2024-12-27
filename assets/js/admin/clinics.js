import {
    showDataForm,
    getBackendUrlApi,
    getBackendUrl,
    showToast,
    showDataSelect
} from "./../_shared/functions.js";
import {
    HttpClinics
} from '../classes/HttpClinics.js';


const api = new HttpClinics();

const createButton = document.querySelector(".createClinic");
const listaClinicas = document.querySelector("#clinica-body");
const listaClinicasId = document.querySelector("#clinicaId-body");

const modal = document.getElementById("clinic-edit-modal");
const modalPhoto = document.querySelector("#uploadModal");
const closeModalButton = document.querySelector(".clinic-close-btn");
const editForm = document.getElementById("clinic-edit-form");
let currentClinicId = null;

//---------------------------------------------------------------
let cClinicId = null;

function openUploadModal(clinicId) {
    cClinicId = clinicId;
    document.getElementById("uploadModal").style.display = "block";
}
function closeUploadModal() {
    document.getElementById("uploadModal").style.display = "none";
    cClinicId = null;
}
console.log(openUploadModal);
//---------------------------------------------------------------
function renderClinics (clinics) {
    listaClinicas.innerHTML = ``;
    clinics.forEach(clinic => {
        const newRow = document.createElement("tr");
        newRow.innerHTML = `
        
          <td>${clinic.clinicId}</td>
            <td>${clinic.clinicName}</td>
            <td>${clinic.clinicAdress}</td>
            <td>${clinic.clinicPhoneNumber}</td>
<td> <button id="upButton">Upload de Foto</button> </td>
        `;
       listaClinicas.appendChild(newRow);
       const upBotton = document.querySelector("#upButton");
       upBotton.addEventListener("click", (clinicId)=>{
        openUploadModal(clinicId);
       })
    });
}
try {
    const clinics = await api.listClinics();
    renderClinics(clinics);
} catch (error) {
    console.error('Erro na requisição:', error);
}

/* window.onclick = function(event) {
    if (event.target === modalPhoto) {
        modalPhoto.style.display = "none";
    }
};
 */

   /*  fetch(`http://localhost/nutrium/api/clinics/listclinics`)
        .then(response => response.json())
        .then(clinics => {
            listaClinicas.innerHTML = ""; // Limpa a tabela
            clinics.forEach(clinic => {
                const newRow = document.createElement("tr");
                newRow.innerHTML = `
                
                     <td>${clinic.clinicId}</td>
                    <td>${clinic.clinicName}</td>
                    <td>${clinic.clinicAdress}</td>
                    <td>${clinic.clinicPhoneNumber}</td>
   <td> <button id="upButton">Upload de Foto</button> </td>
                `;
                listaClinicas.appendChild(newRow);

               const upBotton = document.querySelector("#upButton");
               upBotton.addEventListener("click", (clinicId)=>{
                openUploadModal(clinicId);
               })
            });
        });
 */
//---------------------------------------------------------------
// function closeModal(modalId) {
//     document.getElementById(modalId).style.display = "none";
// }



// async function submitPhoto() {
//     if (!cClinicId) {
//         showToast("Erro: ID da clínica não definido.");
//         return;
//     }

//     const formData = new FormData(document.getElementById("uploadForm"));
//     formData.append("clinic_id", cClinicId);

//     try {
//         const response = await fetch(getBackendUrlApi() + "/clinics/uploadphoto", {
//             method: "POST",
//             body: formData,
//         });

//         const result = await response.json();
//         if (result.success) {
//             showToast("Foto enviada com sucesso!");
//         } else {
//             showToast("Erro ao enviar a foto: " + result.message);
//         }
//         closeUploadModal();
//     } catch (error) {
//         console.error("Erro ao enviar a foto:", error);
//     }
// }
//---------------------------------------------------------------

/* const formDelete =  document.querySelector("#formDelete");
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
}); */
const formDelete =  document.querySelector("#formDelete");
const clinicId = document.querySelector("#clinicId").value;

//function deleteClinicf(){
    //formDelete.addEventListener("submit", async (e) => {
    //   e.preventDefault();
    //});
//}

/*
try {
    const deleteClinics = await api.deleteClinic(clinicId);
    deleteClinicf(deleteClinics);
} catch (error) {
    console.error('Erro na requisição:', error);
}ck
*/

const buttonDelete = document.querySelector("#deleteButton");
buttonDelete.addEventListener("click", () => {
    
    const clinicId = document.querySelector("#clinicId").value;
    //const param = {"id" : clinicId};
    console.log(clinicId);
    api.deleteClinic(clinicId);      
});

const formListId = document.querySelector("#formListId");
const clinicIdForm = document.querySelector('input[name="clinicIdForm"]');



//function renderClinicsId (cliniccl) {
    formListId.addEventListener("submit",async (event)=>{
        event.preventDefault();

        const clinicIdF = clinicIdForm.value;

        const cliniccl = await api.listByIdClinic(clinicIdF);
        console.log(cliniccl[0].clinicName);
        
    if (cliniccl) {
        const e = cliniccl[0]; 
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
//}


/* fetch(`http://localhost/nutrium/api/clinics/listclbyid/${clinicIdF}`, {
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
    }); */



//---------------------------------------------------------------

const formCreateClinic = document.querySelector("#form-createClinic");
const clinicName = document.querySelector("#clinicName");


formCreateClinic.addEventListener("submit", async (e)=>{
    e.preventDefault();
    const formData = new FormData(formCreateClinic);
    try{
        const creatingClinic = await api.createClinic(formData);
    }
    catch(error){
    console.error("erro na requisição", error);
    }
   /*  const clinicName = document.querySelector("#clinicName");
    console.log(`${clinicName.value}`); */
})
/* async function crClinic() {
    formCreateClinic.addEventListener("submit", async (e) => {
        e.preventDefault();        
        try {
            const response = await api.createClinic({
                method: "POST",
                body: new FormData(formCreateClinic)
                // headers: {
                //     token: userAuth.token
                // }
            });
            
            console.log('Clinica criada:', response);
        } catch (error) {
            console.error('Erro:', error);
        }
    });
}

crClinic(); */