<?php

namespace App\Models;

class Categoria
{
    public int $id;
    public int $competicao_id;
    public string $nome;
    public string $faixa_min;
    public string $faixa_max;
    public int $idade_min;
    public int $idade_max;
    public float $peso_min;
    public float $peso_max;
    public int $tempo_luta_seg;
}
