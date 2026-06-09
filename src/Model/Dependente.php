<?php

namespace Model;

use DateTime;
use JsonSerializable;
use Util\CategoriaSocio;

class Dependente implements JsonSerializable
{
    private ?int $id;
    private int $socioTitularId;
    private string $nomeCompleto;
    private string $cpf;
    private ?string $foto;
    private DateTime $dataNascimento;
    private DateTime $dataEntrada;
    private CategoriaSocio $categoria;
    private bool $dancarino;

    public function __construct(
        int $socioTitularId,
        string $nomeCompleto,
        string $cpf,
        DateTime $dataNascimento,
        DateTime $dataEntrada,
        CategoriaSocio $categoria,
        bool $dancarino,
        ?string $foto = null,
        ?int $id = null
    ) {
        $this->id = $id;
        $this->socioTitularId = $socioTitularId;
        $this->nomeCompleto = $nomeCompleto;
        $this->cpf = $cpf;
        $this->foto = $foto;
        $this->dataNascimento = $dataNascimento;
        $this->dataEntrada = $dataEntrada;
        $this->categoria = $categoria;
        $this->dancarino = $dancarino;
    }

    // GETTERS

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSocioTitularId(): int
    {
        return $this->socioTitularId;
    }

    public function getNomeCompleto(): string
    {
        return $this->nomeCompleto;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function getFoto(): ?string
    {
        return $this->foto;
    }

    public function getDataNascimento(): DateTime
    {
        return $this->dataNascimento;
    }

    public function getDataEntrada(): DateTime
    {
        return $this->dataEntrada;
    }

    public function getCategoria(): CategoriaSocio
    {
        return $this->categoria;
    }

    public function isDancarino(): bool
    {
        return $this->dancarino;
    }

    // SETTERS

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setSocioTitularId(int $socioTitularId): void
    {
        $this->socioTitularId = $socioTitularId;
    }

    public function setNomeCompleto(string $nomeCompleto): void
    {
        $this->nomeCompleto = $nomeCompleto;
    }

    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }

    public function setFoto(?string $foto): void
    {
        $this->foto = $foto;
    }

    public function setDataNascimento(DateTime $dataNascimento): void
    {
        $this->dataNascimento = $dataNascimento;
    }

    public function setDataEntrada(DateTime $dataEntrada): void
    {
        $this->dataEntrada = $dataEntrada;
    }

    public function setCategoria(CategoriaSocio $categoria): void
    {
        $this->categoria = $categoria;
    }

    public function setDancarino(bool $dancarino): void
    {
        $this->dancarino = $dancarino;
    }

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'socio_titular_id' => $this->socioTitularId,
            'nome_completo' => $this->nomeCompleto,
            'cpf' => $this->cpf,
            'foto' => $this->foto,
            'data_nascimento' => $this->dataNascimento->format('Y-m-d'),
            'data_entrada' => $this->dataEntrada->format('Y-m-d'),
            'categoria' => $this->categoria->value,
            'dancarino' => $this->dancarino,
        ];
    }
}