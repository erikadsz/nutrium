<?php

namespace Source\App\Api;
use Source\Core\TokenJWT;
use Source\Models\Clinic;

class Clinics extends Api
{
    public function __construct()
    {
        parent::__construct();
    }

    public function listClinics ()
    {
        $clinics = new Clinic();
        $this->back($clinics->selectAll());
    }
    public function listByIdClinic(array $data)
    {
        $service = new Clinic();
        $clinic = $service->getClinicById($data["clinicId"]);
        $this->back($clinic);
    }
      
    public function createClinic(array $data)
    {
        $this->auth();

        if(in_array("", $data)) {
            $this->back([
                "type" => "error",
                "message" => "Preencha todos os campos"
            ]);
            return;
        }

        $clinic = new Clinic(
            null,
            $data["clinicName"],
            $data["clinicAdress"],
            $data["clinicPhoneNumber"]
        );

        $insertClinic = $clinic->insert();

        if(!$insertClinic){
            $this->back([
                "type" => "error",
                "message" => $clinic->getMessage()
            ]);
            return;
        }

        $this->back([
            "type" => "success",
            "message" => "Clínica cadastrada com sucesso!"
        ]);

    }




    public function updateClinic(array $data)
    {
        $this->auth();

            $clinic = new Clinic(
                $data["clinicId"],
                $data["clinicName"],
                $data["clinicAdress"],
                $data["clinicPhoneNumber"]
            );
        

    $result = $clinic->updateClinic();
    var_dump($result);
    }
    

   
    public function deleteClinic(array $data)
{
   $this->auth();
    var_dump($data);
    $service = new Clinic();
    $success = $service->deleteClinic($data["clinicId"]);
    
    if(!$success){
        $this->back([
            "type" => "error",
            "message" => $service->getMessage()
        ]);
        return;
    }

    $this->back([
        "type" => "success",
        "message" => "Clínica Excluida com sucesso!"
    ]);
}

}

