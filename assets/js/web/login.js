import {
    getBackendUrl,
    getBackendUrlApi,
    getFirstName,
    showToast
} from "./../_shared/functions.js";

import{
    HttpUser 
} from "./../classes/HttpUser.js";

console.log("oi")
const api = new HttpUser();


/* const formRegister = document.querySelector("#formRegister");
formRegister.addEventListener("submit", async (e) => {
    e.preventDefault();
    try {
        const users = await api.createUser(new FormData(formRegister));
        showToast(users.message);

    } catch (error){
        console.error("Erro na requisição", error);
    }
  /*   fetch(getBackendUrlApi("users"),{
        method: "POST",
        body: new FormData(formRegister)
    }).then((response) => {
            response.json().then((data) => {
            showToast(data.message);
        });
    });
}); */

const formLogin = document.querySelector("#formLogin");
formLogin.addEventListener("submit", async (e) => {
    e.preventDefault();
try{
    const response = await api.post('/login', new FormData(formLogin));
    if(response.type == "error" || response.type == "warning"){
        showToast(response.message, response.type);
        return;
    }
    showToast(`Olá, ${getFirstName(response.user.name)} como vai!`);
    setTimeout(() => {
        window.location.href = getBackendUrl("app");
    }, 3000);
}catch(error){
    console.error('Erro na requisição:', error);
}
});
/* 
const formLogin = document.querySelector("#formLogin");
formLogin.addEventListener("submit", async (e) => {
    e.preventDefault();
    fetch(getBackendUrlApi("users/login"), {
        method: "POST",
        body: new FormData(formLogin)
    }).then((response) => {
        response.json().then((data) => {
            if (data.type == "error") {
                showToast(data.message);
                return;
            }
            localStorage.setItem("userAuth", JSON.stringify(data.user));
            showToast(`Olá, ${getFirstName(data.user.name)} como vai!`);
            setTimeout(() => {
                window.location.href = getBackendUrl("app");
            }, 3000);
        })
    })
}); */