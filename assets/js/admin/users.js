import {
    showDataForm,
    getBackendUrlApi,
    getBackendUrl,
    showToast,
    showDataSelect
} from "./../_shared/functions.js";

import {
    HttpUser
} from '../classes/HttpUser.js';

const api = new HttpUser();

const userList = document.getElementById("user-body");
const userListId = document.querySelector("#user-bodyId");

const modal = document.getElementById("clinic-edit-modal");
const closeModalButton = document.querySelector(".clinic-close-btn");
const editForm = document.getElementById("clinic-edit-form");
let currentClinicId = null;

//---------------------------------------------------------------
function renderUsers(users){
    userList.innerHTML = ""; // Limpa a tabela
    users.forEach(user => {
        const newRow = document.createElement("tr");
        newRow.innerHTML = `
         <td>${user.id}</td>
         <td>${user.name}</td>
         <td>${user.email}</td>
         <td>${user.cpf}</td>
        `;
        userList.appendChild(newRow);
    });
}
 /*    fetch(`http://localhost/nutrium/api/users/list`)
        .then(response => response.json())
        .then(users => {
            
        }); */
        try {
            const userss = await api.listUsers();
            renderUsers(userss);
        } catch (error) {
            console.error('Erro na requisição:', error);
        }
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

   /*  const formDelete =  document.querySelector("#formDelete");
    formDelete.addEventListener("submit", (e) => {
        e.preventDefault();
        const userId = document.querySelector("#userId").value
        fetch(`http://localhost/nutrium/api/users/deleteuser/${userId}`, {
            method: "delete"  
        }).then(response => {
            return response.json();
        }).then(user => {
            console.log(user)
        });
        }); */

 /*        async function handleUserDeletion(e) {
            e.preventDefault();
            try {
                const userId = document.querySelector("#userId").value;
                const deletedUser = await api.deleteUser(id);
                console.log('Usuario deletado:', deletedUser);
              
            } catch (error) {
                console.error('Erro ao deletar', error);
            }
        }
        const formDelete = document.querySelector("#formDelete");
        formDelete.addEventListener("submit", handleUserDeletion); */
const formDelete =  document.querySelector("#formDelete");
const buttonDelete = document.querySelector("#deleteButton");
buttonDelete.addEventListener("click", () => {
    
    const userId = document.querySelector("#userId").value;
    //const param = {"id" : clinicId};
    console.log(userId);
    api.deleteUser(userId);      
});
//---------------------------------------------------------------  

/* const formListId = document.querySelector("#formListId");
formListId.addEventListener("submit",(event)=>{
event.preventDefault();
const userIdForm = document.querySelector('input[name="userIdForm"]');
const userIdF = userIdForm.value;

fetch(`http://localhost/nutrium/api/users/listuserid/${userIdF}`, {
        method: 'GET'
    }).then((response) => {
      response.json().then((userl) => {
        if (userl) {
          const e = userl[0]; 
          userListId.innerHTML = ""; 
              const newRowId = document.createElement("tr");
              newRowId.innerHTML = `
              <td>${e.Id}</td>
              <td>${e.name}</td>
              <td>${e.email}</td>
              <td>${e.cpf}</td>
             `;
              userListId.appendChild(newRowId);
        
        } else {
          document.querySelector("#messageOfId").innerHTML = `Clínica de ID = ${userIdF} não foi encontrada.`;
        }
      });
    });
}); */

const formListId = document.querySelector("#formListId");
formListId.addEventListener("submit",async (event)=>{
    event.preventDefault();
    const userIdForm = document.querySelector('input[name="userIdForm"]');
    const userIdF = userIdForm.value;
    const userOf = await api.listUserById(userIdF);
    console.log(userOf[0].Id);
    
if (userOf) {
    const e = userOf[0]; 
    userListId.innerHTML = ""; 
    const newRowId = document.createElement("tr");
    newRowId.innerHTML = `
        <td>${e.name}</td>
        <td>${e.address}</td>
        <td>${e.email}</td>
        <td>${e.cpf}</td>
    `;
    userListId.appendChild(newRowId);
} else {
    document.querySelector("#messageOfId").innerHTML = 
        `Usuário de ID = ${userIdF} não foi encontrado.`;
} 
});
//}
/* 
async function handleUserListById(event) {
    event.preventDefault();
    
    try {
        const userIdForm = document.querySelector('input[name="userIdForm"]');
        const userIdF = userIdForm.value;
        
        // Clear previous messages and results
        userListId.innerHTML = "";
        document.querySelector("#messageOfId").innerHTML = "";
        
        // Fetch user by ID
        const userl = await api.listUserById(userIdF);
        
        if (userl && userl.length > 0) {
            const e = userl[0];
            const newRowId = document.createElement("tr");
            newRowId.innerHTML = `
                <td>${e.Id}</td>
                <td>${e.name}</td>
                <td>${e.email}</td>
                <td>${e.cpf}</td>
            `;
            userListId.appendChild(newRowId);
        } else {
            document.querySelector("#messageOfId").innerHTML = 
                `Usuário de ID = ${userIdF} não foi encontrado.`;
        }
    } catch (error) {
        console.error('Erro ao buscar usuário:', error);
        document.querySelector("#messageOfId").innerHTML = 
            `Erro ao buscar usuário. Tente novamente.`;
    }
}
 */
/* const formListId = document.querySelector("#formListId");
formListId.addEventListener("submit", handleUserListById); */

//---------------------------------------------------------------
/* const formCreateUser = document.querySelector("#form-createUser");
const name = document.querySelector("#name");
formCreateUser.addEventListener("submit", async (e) => {
    e.preventDefault(); 
     fetch("http://localhost/nutrium/api/users/create", {
            method: "POST",
            body: new FormData(formCreateUser),
            // headers: {
            //    token: userAuth.token 
            // }
        }).then((response) => {
        
            response.json().then((data) => {
                let response = data
                console.log(`${name.value}`);
            });
        });
    });
     */
    /* async function handleUserCreation(e) {
        e.preventDefault();
        
        try {
            // Create FormData from the form
            const formData = new FormData(formCreateUser);
            
            // Create user via API
            const createdUser = await api.createUser(formData);
            
            // Log the created user's name
            console.log(`User created: ${name.value}`);
            
            // Optional: Add user feedback
            alert('User successfully created');
            
            // Reset the form
            formCreateUser.reset();
        } catch (error) {
            console.error('Error creating user:', error);
            alert('Failed to create user');
        }
    }
     */

    
    const formCreateUser = document.querySelector("#form-createUser");




    formCreateUser.addEventListener("submit", async (e)=>{
    e.preventDefault();
    const formData = new FormData(formCreateUser);
    try{
        const creatingUser = await api.createUser(formData);
    }
    catch(error){
    console.error("erro na requisição", error);
    }
  
})
        


