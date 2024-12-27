import {
    showDataForm,
    getBackendUrlApi, getBackendUrl, showToast
} from "./../_shared/functions.js";

import {
    userAuth
} from "./../_shared/globals.js";

//console.log(userAuth.pfp);

document.querySelector("img").setAttribute("src", getBackendUrl(userAuth.pfp));



fetch("http://localhost/nutrium/api/users/me", {
    method: "GET",
    headers: {
        token: userAuth.token
    }
}).then((response) => {
    response.json().then((data) => {
        if(data.error) {
            showToast(data.error.message);
            setTimeout(() => {
                window.location.href = getBackendUrl();
            },3000);
        }

        const dataUserTemp = {
            name: data.user.name,
            email: data.user.email,
            address: data.user.address
        };
        showDataForm(dataUserTemp);
        //document.querySelector("img").setAttribute("src", getBackendUrl(data.user.pfp));
    });
});

const formUserUpdate = document.querySelector("#profile");

formUserUpdate.addEventListener("submit", (e) => {
    e.preventDefault();
    const formData = new URLSearchParams(new FormData(formUserUpdate)).toString();
    fetch(getBackendUrlApi("users/update"), {
        method: "put",
        body: formData,
        headers: {
            token: userAuth.token,
            "Content-Type": "application/x-www-form-urlencoded"
        }
    })
        .then((response) => {
        response.json()
            .then((user) => {
                console.log(user);
                if(user.error) {
                    showToast(user.error.message);
                    return;
                }
                showToast("Dados atualizados com sucesso!");
            });
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const storedUserAuth = JSON.parse(localStorage.getItem("userAuth"));
    if (storedUserAuth && storedUserAuth.pfp) {
        document.querySelector("img").setAttribute("src", getBackendUrl(storedUserAuth.pfp));
    }
});
const formPhoto = document.querySelector("#formPhoto");

console.log(formPhoto);


formPhoto.addEventListener("submit", (e) => {
    e.preventDefault();
    fetch(`http://localhost/nutrium/api/users/pfp`, {
        method: "POST",
        body: new FormData(formPhoto),
        headers: {
            token: userAuth.token
        }
    }).then((response) => {
        response.json().then((data) => {
            if(data.error) {
                showToast(data.error.message);
                return;
            }
           
            document.querySelector("img").setAttribute("src", getBackendUrl(data.user.pfp));
            userAuth.pfp = data.user.pfp;
            localStorage.setItem("userAuth", JSON.stringify(userAuth));
     
            console.log("Conteúdo de userAuth no localStorage:", JSON.parse(localStorage.getItem("userAuth")));

        });
    });
});

