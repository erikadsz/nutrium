<?php

namespace Source\Models;

use PDOException;
use Source\Core\Connect;
use Source\Core\Model;
class Patient extends Model {
    private $patientId;
    private $patientCpf;
    private $patientName;
    private $patientEmail;
    private $patientCity;
    private $patientAdress;
    private $patientPayment;
    private $patientClinicRegister;
    private $patientDietRegister;
    private $patientPhoneNumber;
    private $patientWeight;
    private $patientHeight;
    private $fk_dietPlanId;
    private $fk_register;
    private $message;

    public function __construct(
        int $patientId = null,
        string $patientCpf = null,
        string $patientName = null,
        string $patientEmail = null,
        string $patientCity = null,
        string $patientAdress = null,
        string $patientPayment = null,
        string $patientClinicRegister = null,
        string $patientDietRegister = null,
        string $patientPhoneNumber = null,
        float $patientWeight = null,
        float $patientHeight = null,
        int $fk_dietPlanId = null,
        int $fk_register = null,
        string $message = null
    ) {
        $this->patientId = $patientId;
        $this->patientCpf = $patientCpf;
        $this->patientName = $patientName;
        $this->patientEmail = $patientEmail;
        $this->patientCity = $patientCity;
        $this->patientAdress = $patientAdress;
        $this->patientPayment = $patientPayment;
        $this->patientClinicRegister = $patientClinicRegister;
        $this->patientDietRegister = $patientDietRegister;
        $this->patientPhoneNumber = $patientPhoneNumber;
        $this->patientWeight = $patientWeight;
        $this->patientHeight = $patientHeight;
        $this->fk_dietPlanId = $fk_dietPlanId;
        $this->fk_register = $fk_register;
        $this->message = $message;
        $this->entity = "patients"; // Ajuste se necessário, assumindo que 'patients' é a entidade correspondente
    }

    public function getPatientId(): ?int
    {
        return $this->patientId;
    }

    public function setPatientId(?int $patientId): void
    {
        $this->patientId = $patientId;
    }

    public function getPatientCpf(): ?string
    {
        return $this->patientCpf;
    }

    public function setPatientCpf(?string $patientCpf): void
    {
        $this->patientCpf = $patientCpf;
    }

    public function getPatientName(): ?string
    {
        return $this->patientName;
    }

    public function setPatientName(?string $patientName): void
    {
        $this->patientName = $patientName;
    }

    public function getPatientEmail(): ?string
    {
        return $this->patientEmail;
    }

    public function setPatientEmail(?string $patientEmail): void
    {
        $this->patientEmail = $patientEmail;
    }
    public function getPatientCity(): ?string
    {
        return $this->patientCity;
    }

    public function setPatientCity(?string $patientCity): void
    {
        $this->patientCity = $patientCity;
    }

    public function getPatientAdress(): ?string
    {
        return $this->patientAdress;
    }

    public function setPatientAdress(?string $patientAdress): void
    {
        $this->patientAdress = $patientAdress;
    }

    public function getPatientPayment(): ?string
    {
        return $this->patientPayment;
    }

    public function setPatientPayment(?string $patientPayment): void
    {
        $this->patientPayment = $patientPayment;
    }

    public function getPatientClinicRegister(): ?string
    {
        return $this->patientClinicRegister;
    }

    public function setPatientClinicRegister(?string $patientClinicRegister): void
    {
        $this->patientClinicRegister = $patientClinicRegister;
    }

    public function getPatientDietRegister(): ?string
    {
        return $this->patientDietRegister;
    }

    public function setPatientDietRegister(?string $patientDietRegister): void
    {
        $this->patientDietRegister = $patientDietRegister;
    }

    public function getPatientPhoneNumber(): ?string
    {
        return $this->patientPhoneNumber;
    }

    public function setPatientPhoneNumber(?string $patientPhoneNumber): void
    {
        $this->patientPhoneNumber = $patientPhoneNumber;
    }

    public function getPatientWeight(): ?float
    {
        return $this->patientWeight;
    }

    public function setPatientWeight(?float $patientWeight): void
    {
        $this->patientWeight = $patientWeight;
    }

    public function getPatientHeight(): ?float
    {
        return $this->patientHeight;
    }

    public function setPatientHeight(?float $patientHeight): void
    {
        $this->patientHeight = $patientHeight;
    }

    public function getFkDietPlanId(): ?int
    {
        return $this->fk_dietPlanId;
    }

    public function setFkDietPlanId(?int $fk_dietPlanId): void
    {
        $this->fk_dietPlanId = $fk_dietPlanId;
    }

    public function getFkRegister(): ?int
    {
        return $this->fk_register;
    }

    public function setFkRegister(?int $fk_register): void
    {
        $this->fk_register = $fk_register;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    public function insert(): ?int
    {
        $conn = Connect::getInstance();

        if (!filter_var($this->patientEmail, FILTER_VALIDATE_EMAIL)) {
            $this->message = "E-mail Inválido!";
            return null;
        }

        $query = "SELECT * FROM patients WHERE patientEmail = :patientEmail";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":patientEmail", $this->patientEmail);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $this->message = "E-mail já cadastrado!";
            return null;
        }

        $query = "INSERT INTO patients 
                  (patientCpf, patientName, patientEmail, patientCity, patientAdress, patientPayment, patientClinicRegister, 
                   patientDietRegister, patientPhoneNumber, patientWeight, patientHeight, fk_dietPlanId, fk_register) 
                  VALUES 
                  (:patientCpf, :patientName, :patientEmail, :patientCity, :patientAdress, :patientPayment, :patientClinicRegister, 
                   :patientDietRegister, :patientPhoneNumber, :patientWeight, :patientHeight, :fk_dietPlanId, :fk_register)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":patientCpf", $this->patientCpf);
        $stmt->bindParam(":patientName", $this->patientName);
        $stmt->bindParam(":patientEmail", $this->patientEmail);
        $stmt->bindParam(":patientCity", $this->patientCity);
        $stmt->bindParam(":patientAdress", $this->patientAdress);
        $stmt->bindParam(":patientPayment", $this->patientPayment);
        $stmt->bindParam(":patientClinicRegister", $this->patientClinicRegister);
        $stmt->bindParam(":patientDietRegister", $this->patientDietRegister);
        $stmt->bindParam(":patientPhoneNumber", $this->patientPhoneNumber);
        $stmt->bindParam(":patientWeight", $this->patientWeight);
        $stmt->bindParam(":patientHeight", $this->patientHeight);
        $stmt->bindParam(":fk_dietPlanId", $this->fk_dietPlanId);
        $stmt->bindParam(":fk_register", $this->fk_register);

        try {
            $stmt->execute();
            $this->patientId = $conn->lastInsertId(); 
            return $this->patientId;
        } catch (PDOException $e) {
            $this->message = "Erro ao inserir paciente: {$e->getMessage()}";
            return null;
        }
    }

    public function getPatientById(int $patientId): array


    {
        $query = "SELECT 
        patients.patientId, 
        patients.patientCpf, 
        patients.patientName, 
        patients.patientEmail, 
        patients.patientCity, 
        patients.patientAdress,
        patients.patientPayment,
        patients.patientClinicRegister,
        patients.patientDietRegister,
        patients.patientPhoneNumber,
        patients.patientWeight,
        patients.patientHeight,
        patients.fk_dietPlanId
      FROM patients
      WHERE patientId = :patientId";

        $conn = Connect::getInstance();
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":patientId", $patientId);
        $stmt->execute();
        return $stmt->fetchAll();
        
    }

    public function updatePatient(): bool
    {
        $conn = Connect::getInstance();
    
        $checkQuery = "SELECT patientEmail FROM patients WHERE patientEmail = :patientEmail AND patientId != :patientId";
        $checkStmt = $conn->prepare($checkQuery);
        $checkStmt->bindParam(":patientEmail", $this->patientEmail);
        $checkStmt->bindParam(":patientId", $this->patientId);
        $checkStmt->execute();
    
        if ($checkStmt->rowCount() > 0) {
            $this->message = "Email já cadastrado.";
            return false;
        }
    
        // Atualização dos dados do paciente
        $query = "UPDATE patients 
                  SET patientCpf = :patientCpf, 
                      patientName = :patientName, 
                      patientEmail = :patientEmail, 
                      patientCity = :patientCity, 
                      patientAdress = :patientAdress, 
                      patientPayment = :patientPayment, 
                      patientClinicRegister = :patientClinicRegister, 
                      patientDietRegister = :patientDietRegister, 
                      patientPhoneNumber = :patientPhoneNumber, 
                      patientWeight = :patientWeight, 
                      patientHeight = :patientHeight, 
                      fk_dietPlanId = :fk_dietPlanId
                  WHERE patientId = :patientId";
    
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":patientId", $this->patientId);
        $stmt->bindParam(":patientCpf", $this->patientCpf);
        $stmt->bindParam(":patientName", $this->patientName);
        $stmt->bindParam(":patientEmail", $this->patientEmail);
        $stmt->bindParam(":patientCity", $this->patientCity);
        $stmt->bindParam(":patientAdress", $this->patientAdress);
        $stmt->bindParam(":patientPayment", $this->patientPayment);
        $stmt->bindParam(":patientClinicRegister", $this->patientClinicRegister);
        $stmt->bindParam(":patientDietRegister", $this->patientDietRegister);
        $stmt->bindParam(":patientPhoneNumber", $this->patientPhoneNumber);
        $stmt->bindParam(":patientWeight", $this->patientWeight);
        $stmt->bindParam(":patientHeight", $this->patientHeight);
        $stmt->bindParam(":fk_dietPlanId", $this->fk_dietPlanId);
    
        try {
            $stmt->execute();
            $this->message = "Paciente atualizado com sucesso.";
            return true;
        } catch (PDOException $e) {
            $this->message = "Erro ao atualizar o paciente: " . $e->getMessage();
            return false;
        }
    }

    public function deletePatient(int $patientId): bool
    {
    
        $conn = Connect::getInstance();
    
        $checkQuery = "SELECT patientId FROM patients WHERE patientId = :patientId";
        
        $checkStmt = $conn->prepare($checkQuery);
        $checkStmt->bindParam(":patientId", $patientId);
        $checkStmt->execute();
    
        if ($checkStmt->rowCount() === 0) {
            $this->message = "Paciente não encontrado.";
            return false;
        }
    
        $query = "DELETE FROM patients WHERE patientId = :patientId";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":patientId", $patientId);
    
        try {
            $stmt->execute();
            $this->message = "Paciente Excluido com sucesso ";
            return true;
        } catch (PDOException) {
            $this->message = "Erro ao excluir o paciente: ";
            return false;
        }
    }

    public function listPatients(): array
    {
        $conn = Connect::getInstance();
        $query = "SELECT * FROM patients";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
