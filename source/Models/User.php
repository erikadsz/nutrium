<?php
namespace Source\Models;
use PDOException;
use Source\Core\Connect;
use Source\Core\Model;


class User extends Model {
    private $id;
    private $name;
    private $email;
    private $password;
    private $cpf;
    private $city;
    private $address;
    private $fk_payPlan;
    private $fk_appointmentId;
    private $fk_clinic;
    private $message;

    public function __construct(
        int $id = null,
        string $name = null,
        string $email = null,
        string $password = null,
        string $cpf = null,
        string $city = null,
        string $address = null,
        int $fk_payPlan = null,
        int $fk_appointmentId = null,
        int $fk_clinic = null,
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->cpf = $cpf;
        $this->city = $city;
        $this->address = $address;
        $this->fk_payPlan = $fk_payPlan;
        $this->fk_appointmentId = $fk_appointmentId;
        $this->fk_clinic = $fk_clinic;
        $this->entity = "users";
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }
    public function getCpf(): ?string
    {
        return $this->cpf;
    }

    public function setCpf(?string $cpf): void
    {
        $this->cpf = $cpf;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): void
    {
        $this->address = $address;
    }

    public function getFkPayPlan(): ?int
    {
        return $this->fk_payPlan;
    }

    public function setFkPayPlan(?int $fk_payPlan): void
    {
        $this->fk_payPlan = $fk_payPlan;
    }

    public function getFkAppointmentId(): ?int
    {
        return $this->fk_appointmentId;
    }

    public function setFkAppointmentId(?int $fk_appointmentId): void
    {
        $this->fk_appointmentId = $fk_appointmentId;
    }

    public function getFkClinic(): ?int
    {
        return $this->fk_clinic;
    }

    public function setFkClinic(?int $fk_clinic): void
    {
        $this->fk_clinic = $fk_clinic;
    }

    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }


    public function listUsers()
    {
        $query = "SELECT * FROM users";
        $conn = Connect::getInstance();
        $stmt = $conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function insert(): ?int
    {

        $conn = Connect::getInstance();

        if(!filter_var($this->email,FILTER_VALIDATE_EMAIL)){
            $this->message = "E-mail Inválido!";
            return false;
        }

        $query = "SELECT * FROM users WHERE email LIKE :email";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":email", $this->email);
        $stmt->execute();

        if($stmt->rowCount() == 1) {
            $this->message = "E-mail já cadastrado!";
            return false;
        }

        $this->password = password_hash($this->password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users (name, email, password, cpf, city, address, fk_payPlan, fk_appoitmentId, fk_clinic) 
                  VALUES (:name, :email, :password, :cpf, :city, :address, :fk_payPlan, :fk_appoitmentId, :fk_clinic)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":password", $this->password);
        $stmt->bindParam(":cpf", $this->cpf);
        $stmt->bindParam(":city", $this->city);
        $stmt->bindParam(":address", $this->address);
        $stmt->bindParam(":fk_payPlan", $this->fk_payPlan);
        $stmt->bindParam(":fk_appoitmentId", $this->fk_appointmentId);
        $stmt->bindParam(":fk_clinic", $this->fk_clinic);

        try {
            $stmt->execute();
            return $conn->lastInsertId();
        } catch (PDOException) {
            $this->message = "Por favor, informe todos os campos!";
            return false;
        }
    }

    public function login(string $email, string $password): bool
    {
        $query = "SELECT * FROM users WHERE email = :email";
        $conn = Connect::getInstance();
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        $result = $stmt->fetch();

        if (!$result) {
            $this->message = "E-mail não cadastrado!";
            return false;
        }

        if (!password_verify($password, $result->password)) {
            $this->message = "Senha incorreta!";
            return false;
        }

        $this->setId($result->id);
        $this->setName($result->name);
        $this->setEmail($result->email);

        $this->message = "Usuário logado com sucesso!";

        return true;

    }

    public function update () : bool
    {
        $conn = Connect::getInstance();

        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $this->message = "E-mail inválido!";
            return false;
        }

        $query = "SELECT * FROM users WHERE email LIKE :email AND id != :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":id", $this->id);
        $stmt->execute();

        if($stmt->rowCount() == 1) {
            $this->message = "E-mail já cadastrado!";
            return false;
        }

        $query = "UPDATE users 
        SET name = :name, 
        email = :email, 
        password = :password, 
        cpf = :cpf, 
        city = :city, 
        address = :address,
        fk_payPlan = :fk_payPlan,
        fk_appointmentId = :fk_appoitmentId, 
        fk_clinic = :fk_clinic
        WHERE id = :id";


        $stmt = $conn->prepare($query);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":password", $this->password);
        $stmt->bindParam(":cpf", $this->cpf);
        $stmt->bindParam(":city", $this->city);
        $stmt->bindParam(":address", $this->address);
        $stmt->bindParam(":fk_payPlan", $this->fk_payPlan);
        $stmt->bindParam(":fk_appoitmentId", $this->fk_appointmentId);
        $stmt->bindParam(":fk_clinic", $this->fk_clinic); 
        $stmt->bindParam(":id", $this->id);


        try {
            $stmt->execute();
            $this->message = "Usuário atualizado com sucesso!";
            return true;
        } catch (PDOException $exception) {
            $this->message = "Erro ao atualizar: {$exception->getMessage()}";
            return false;
        }

    }

    public function updatePassword (string $password, string $newPassword, string $confirmNewPassword) : bool
    {
        $query = "SELECT * FROM users WHERE id = :id";
        $conn = Connect::getInstance();
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $this->id);
        $stmt->execute();
        $result = $stmt->fetch();

        if (!password_verify($password, $result->password)) {
            $this->message = "Senha incorreta!";
            return false;
        }

        if ($newPassword != $confirmNewPassword) {
            $this->message = "As senhas não conferem!";
            return false;
        }

        $newPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        $query = "UPDATE users 
                  SET password = :password 
                  WHERE id = :id";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":password", $newPassword);
        $stmt->bindParam(":id", $this->id);

        try {
            $stmt->execute();
            $this->message = "Senha atualizada com sucesso!";
            return true;
        } catch (PDOException $exception) {
            $this->message = "Erro ao atualizar: {$exception->getMessage()}";
            return false;
        }
    }

    public function getUserById(int $id): array
    {

        $query = "SELECT 
        users.id, 
        users.name, 
        users.email, 
        users.password, 
        users.cpf, 
        users.city, 
        users.address, 
        payplans.payPlanName as payPlanName, 
        appointments.appointmentName as appointmentName, 
        clinics.clinicName as clinicName
        FROM users
        LEFT JOIN payplans ON users.fk_payPlan = payplans.payPlanId
        LEFT JOIN appointments ON users.fk_appointmentId = appointments.appointmentId
        LEFT JOIN clinics ON users.fk_clinic = clinics.clinicId
        WHERE users.id = :id";
                  
        $conn = Connect::getInstance();
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }


}
