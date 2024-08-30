<?php

namespace Source\App\Api;
use Source\Core\TokenJWT;
use Source\Models\Patient;

class Patients extends Api
{
    public function __construct()
    {
        parent::__construct();
    }

    public function listPatients ()
    {
        $patients = new Patient();
        $this->back($patients->selectAll());
    }
    public function listById(array $data)
{
    $service = new Patient();
    $patient = $service->getPatientById($data["patientId"]);
    $this->back($patient);
}
  
    public function createPatient(array $data)
    {
        $this->auth();

        if(in_array("", $data)) {
            $this->back([
                "type" => "error",
                "message" => "Preencha todos os campos"
            ]);
            return;
        }

        $patient = new Patient(
            null,
            $data["patientCpf"],
            $data["patientName"],
            $data["patientEmail"],
            $data["patientCity"],
            $data["patientAdress"],
            $data["patientPayment"],
            $data["patientClinicRegister"],
            $data["patientDietRegister"],
            $data["patientPhoneNumber"],
            $data["patientWeight"],
            $data["patientHeight"],
            $data["fk_dietPlanId"],
            $data["fk_register"]
         );

        $insertPatient = $patient->insert();

        if(!$insertPatient){
            $this->back([
                "type" => "error",
                "message" => $patient->getMessage()
            ]);
            return;
        }

        $this->back([
            "type" => "success",
            "message" => "Paciente cadastrado com sucesso!"
        ]);

    }


       
    // Atualizar paciente
    public function updatePatient(array $data)
    {
        $this->auth();

        $patient = new Patient(
            $data["patientId"],
            $data["patientCpf"],
            $data["patientName"],
            $data["patientEmail"],
            $data["patientCity"],
            $data["patientAdress"],
            $data["patientPayment"],
            $data["patientClinicRegister"],
            $data["patientDietRegister"],
            $data["patientPhoneNumber"],
            $data["patientWeight"],
            $data["patientHeight"],
            $data["fk_dietPlanId"],
            
         );

        $result = $patient->updatePatient();
    var_dump($result);
    }
    

    public function deletePatient(array $data)
{
   $this->auth();
    
    $service = new Patient();
    $success = $service->deletePatient($data["patientId"]);
    
    if(!$success){
        $this->back([
            "type" => "error",
            "message" => $service->getMessage()
        ]);
        return;
    }

    $this->back([
        "type" => "success",
        "message" => "Paciente Excluido com sucesso!"
    ]);
}
}
