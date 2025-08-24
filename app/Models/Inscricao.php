<?php

namespace App\Models;

class Inscricao
{
    public int $id;
    public int $atleta_id;
    public int $categoria_id;
    public string $status; // pendente|aprovada|reprovada
    public ?string $motivo_reprovacao;
}
