<?php

namespace App\Models;

class Atleta
{
    public int $id;
    public string $nome;
    public ?string $email;
    public string $data_nascimento;
    public float $peso_kg;
    public string $faixa;
    public ?int $academia_id;
}
