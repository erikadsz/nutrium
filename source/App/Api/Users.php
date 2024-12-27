<?php

namespace Source\App\Api;

use Source\Core\TokenJWT;
use Source\Models\User;
use Source\Support\ImageUploader;

class Users extends Api
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getUser ()
    {
        $this->auth();

        $users = new User();
        $user = $users->selectById($this->userAuth->id);

        $this->back([
            "type" => "success",
            "message" => "Usuário autenticado",
            "user" => [
                "id" => $this->userAuth->id,
                "name" => $this->userAuth->name,
                "email" => $this->userAuth->email,
            ]
        ]);

    }
    public function tokenValidate ()
    {
        $this->auth();

        $this->back([
            "type" => "success",
            "message" => "Token válido",
            "user" => [
                "id" => $this->userAuth->id,
                "name" => $this->userAuth->name,
                "email" => $this->userAuth->email
            ]
        ]);
    }


    public function listUsers ()
    {
        $users = new User();
        $this->back($users->selectAll());
    }
    public function listUserById(array $data)
    {
        $service = new User();
        $userc = $service->getUserById($data["Id"]);
        $this->back($userc);
    }

    public function createUser (array $data)
    {
        if(in_array("", $data)) {
            $this->back([
                "type" => "error",
                "message" => "Preencha todos os campos"
            ]);
            return;
        }

        $user = new User(
                null,
                $data["name"],
                $data["email"],
                $data["password"],
                $data["cpf"],
                $data["city"],
                $data["address"],
                $data["fk_payPlan"],
                $data["fk_appointmentId"],
                $data["fk_clinic"],
                $data["pfp"]


            
        );

        $insertUser = $user->insert();

        if(!$insertUser){
            $this->back([
                "type" => "error",
                "message" => $user->getMessage()
            ]);
            return;
        }

        $this->back([
            "type" => "success",
            "message" => "Usuário cadastrado com sucesso!"
        ]);

    }

    public function loginUser (array $data) {
        $user = new User();

        if(!$user->login($data["email"],$data["password"])){
            $this->back([
                "type" => "error",
                "message" => $user->getMessage()
            ]);
            return;
        }
        $token = new TokenJWT();
        $this->back([
            "type" => "success",
            "message" => $user->getMessage(),
            "user" => [
                "id" => $user->getId(),
                "name" => $user->getName(),
                "email" => $user->getEmail(),
                "pfp" => $user->getPfp(),
                "token" => $token->create([
                    "id" => $user->getId(),
                    "name" => $user->getName(),
                    "email" => $user->getEmail()
                ])
            ]
        ]);

    }

    public function updateUser(array $data)
    {
        if(!$this->userAuth){
            $this->back([
                "type" => "error",
                "message" => "Você não pode estar aqui.."
            ]);
            return;
        }

        $user = new User(
            $data["id"],
            $data["name"],
            $data["email"],
            $data["password"],
            $data["cpf"],
            $data["city"],
            $data["address"],
            $data["fk_payPlan"],
            $data["fk_appoitmentId"],
            $data["fk_clinic"],
            $data["pfp"]

        );
        

        if(!$user->update()){
            $this->back([
                "type" => "error",
                "message" => $user->getMessage()
            ]);
            return;
        }

        $this->back([
            "type" => "success",
            "message" => $user->getMessage(),
            "user" => [
                "id" => $user->getId(),
                "name" => $user->getName(),
                "email" => $user->getEmail()
            ]
        ]);
    }

    public function updatePhoto(array $data)
    {

        $imageUploader = new ImageUploader();
        $pfp = (!empty($_FILES["pfp"]["name"]) ? $_FILES["pfp"] : null);

        $this->auth();

        /*
        if (!$pfp) {
            $this->back([
                "type" => "error",
                "message" => "Por favor, envie uma foto do tipo JPG ou JPEG"
            ]);
            return;
        }
        */

        $upload = $imageUploader->upload($pfp);

        $user = new User(
            id: $this->userAuth->id,
            pfp: $upload
        );

        if (!$user->updatePhoto()) {
            $this->back([
                "type" => "error",
                "message" => $user->getMessage()
            ]);
            return;
        }

        $this->back([
            "type" => "success",
            "message" => $user->getMessage(),
            "user" => [
                "id" => $user->getId(),
                "name" => $user->getName(),
                "email" => $user->getEmail(),
                "address" => $user->getAddress(),
                "pfp" => $user->getPfp()
            ]
        ]);

    }


    public function getPhoto (array $data)
    {
        $this->auth();

        $user = new User();
        $userpfp = $user->selectById($this->userAuth->id);

        $this->back([
            "type" => "success",
            "message" => "Foto do usuário",
            "pfp" => $userpfp->pfp
        ]);
    }

    public function setPassword(array $data)
    {
        if(!$this->userAuth){
            $this->back([
                "type" => "error",
                "message" => "Você não pode estar aqui.."
            ]);
            return;
        }

        $user = new User($this->userAuth->id);

        if(!$user->updatePassword($data["password"],$data["newPassword"],$data["confirmNewPassword"])){
            $this->back([
                "type" => "error",
                "message" => $user->getMessage()
            ]);
            return;
        }

        $this->back([
            "type" => "success",
            "message" => $user->getMessage()
        ]);
    }

    public function deleteUser(array $data)
    {
      // $this->auth();
        
        $service = new User();
        $success = $service->deleteUser($data["Id"]);
        
        if(!$success){
            $this->back([
                "type" => "error",
                "message" => $service->getMessage()
            ]);
            return;
        }
    
        $this->back([
            "type" => "success",
            "message" => "Usuário Excluido com sucesso!"
        ]);
    }
}