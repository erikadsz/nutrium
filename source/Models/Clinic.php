<?php

namespace Source\Models;

use PDOException;
use Source\Core\Connect;
use Source\Core\Model;


class Clinic extends Model {
    private $clinicId;
    private $clinicName;
    private $clinicAdress;
    private $clinicPhoneNumber;
    private $message;

    public function __construct(
        int $clinicId = null,
        string $clinicName = null,
        string $clinicAdress = null,
        string $clinicPhoneNumber = null,
        string $message = null
    ) {
        $this->clinicId = $clinicId;
        $this->clinicName = $clinicName;
        $this->clinicAdress = $clinicAdress;
        $this->clinicPhoneNumber = $clinicPhoneNumber;
        $this->message = $message;
        $this->entity = "clinics"; // A tabela do banco de dados
    }

    public function getClinicId(): ?int
    {
        return $this->clinicId;
    }

    public function setClinicId(?int $clinicId): void
    {
        $this->clinicId = $clinicId;
    }

    public function getClinicName(): ?string
    {
        return $this->clinicName;
    }

    public function setClinicName(?string $clinicName): void
    {
        $this->clinicName = $clinicName;
    }

    public function getClinicAdress(): ?string
    {
        return $this->clinicAdress;
    }

    public function setClinicAdress(?string $clinicAdress): void
    {
        $this->clinicAdress = $clinicAdress;
    }

    public function getClinicPhoneNumber(): ?string
    {
        return $this->clinicPhoneNumber;
    }

    public function setClinicPhoneNumber(?string $clinicPhoneNumber): void
    {
        $this->clinicPhoneNumber = $clinicPhoneNumber;
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

        // Verificar se o nome da clínica já está cadastrado
        $query = "SELECT * FROM clinics WHERE clinicName = :clinicName";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":clinicName", $this->clinicName);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $this->message = "Clínica já cadastrada!";
            return null;
        }

        $query = "INSERT INTO clinics (clinicName, clinicAdress, clinicPhoneNumber) 
                  VALUES (:clinicName, :clinicAdress, :clinicPhoneNumber)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":clinicName", $this->clinicName);
        $stmt->bindParam(":clinicAdress", $this->clinicAdress);
        $stmt->bindParam(":clinicPhoneNumber", $this->clinicPhoneNumber);

        try {
            $stmt->execute();
            $this->clinicId = $conn->lastInsertId(); // Atualiza o clinicId com o valor gerado
            return $this->clinicId;
        } catch (PDOException $e) {
            $this->message = "Erro ao inserir clínica: {$e->getMessage()}";
            return null;
        }
    }

    public function getClinicById(int $clinicId): ?array
    {
        $query = "SELECT 
        clinics.clinicId, 
        clinics.clinicName, 
        clinics.clinicAdress, 
        clinics.clinicPhoneNumber
        FROM clinics
        WHERE clinicId = :clinicId";
        $conn = Connect::getInstance();
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":clinicId", $clinicId);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function updateClinic(): bool
    {
        $conn = Connect::getInstance();
    
        // Verificar se o nome da clínica já existe, exceto para a clínica atual
        $checkQuery = "SELECT clinicName FROM clinics WHERE clinicName = :clinicName AND clinicId != :clinicId";
        $checkStmt = $conn->prepare($checkQuery);
        $checkStmt->bindParam(":clinicName", $this->clinicName);
        $checkStmt->bindParam(":clinicId", $this->clinicId);
        $checkStmt->execute();
    
        if ($checkStmt->rowCount() > 0) {
            $this->message = "Clínica já cadastrada.";
            return false;
        }
    
        // Atualizar informações da clínica
        $query = "UPDATE clinics 
                  SET clinicName = :clinicName, 
                      clinicAdress = :clinicAdress, 
                      clinicPhoneNumber = :clinicPhoneNumber
                  WHERE clinicId = :clinicId";
    
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":clinicId", $this->clinicId);
        $stmt->bindParam(":clinicName", $this->clinicName);
        $stmt->bindParam(":clinicAdress", $this->clinicAdress);
        $stmt->bindParam(":clinicPhoneNumber", $this->clinicPhoneNumber);
    
        try {
            $stmt->execute();
            $this->message = "Clínica atualizada com sucesso!";
            return true;
        } catch (PDOException $e) {
            $this->message = "Erro ao atualizar clínica: {$e->getMessage()}";
            return false;
        }
    }
    
    public function deleteClinic(int $clinicId): bool
    {
    
        $conn = Connect::getInstance();
    
        $checkQuery = "SELECT clinicId FROM clinics WHERE clinicId = :clinicId";
        
        $checkStmt = $conn->prepare($checkQuery);
        $checkStmt->bindParam(":clinicId", $clinicId);
        $checkStmt->execute();
    
        if ($checkStmt->rowCount() === 0) {
            $this->message = "Clínica não encontrada.";
            return false;
        }
    
        $query = "DELETE FROM clinics WHERE clinicId = :clinicId";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":clinicId", $clinicId);
    
        try {
            $stmt->execute();
            $this->message = "Clínica Excluida com sucesso! ";
            return true;
        } catch (PDOException) {
            $this->message = "Erro ao excluir a clínica: ";
            return false;
        }
    }


    public function listClinics(): array
    {
        $conn = Connect::getInstance();
        $query = "SELECT * FROM clinics";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
