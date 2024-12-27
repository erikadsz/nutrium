<?php

namespace Source\Models;

use PDOException;
use Source\Core\Connect;
use Source\Core\Model;


class Image extends Model
{
    private $id;
    private $path;
    private $clinic_id;
    private $message;

    public function __construct(
        int $id = null,
        string $path = null,
        int $clinic_id = null

    ) {
        $this->id = $id;
        $this->path = $path;
        $this->clinic_id = $clinic_id;
        $this->entity = "images";
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(?string $path): void
    {
        $this->path = $path;
    }
    public function getClinicId(): ?int
    {
        return $this->clinic_id;
    }

    public function setClinicId(?int $clinic_id): void
    {
        $this->clinic_id = $clinic_id;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function insertP (): bool
    {
        $query = "INSERT INTO images (path, clinic_id) 
                  VALUES (:path, :clinic_id)";

        $stmt = Connect::getInstance()->prepare($query);
        $stmt->bindParam(":path", $this->path);
        $stmt->bindParam(":clinic_id", $this->clinic_id);

        try {
            $stmt->execute();
            $this->message = "Foto inserida com sucesso!";
            return true;
        } catch (PDOException $exception) {
            $this->message = "Erro ao atualizar: {$exception->getMessage()}";
            return false;
        }

    }
}