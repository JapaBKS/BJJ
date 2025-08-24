<?php

namespace App\Models;

class Pesagem
{
    public int $id;
    public int $inscricao_id;
    public float $peso_oficial;
    public bool $uniforme_ok;
    public string $status; // aprovado|reprovado
    public ?string $observacoes;
}
