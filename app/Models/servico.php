<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servico extends Model
{
    use HasFactory;

    protected $fillable =['nome', 'valor_minimo', 'porcentagem', 'valor_quarto', 'horas_quarto', 'valor_sala', 'horas_sala', 'valor_banheiro', 'horas_banheiro', 'valor_cocinha', 'horas_cocinha', 'valor_quintal', 'horas_quintal', 'valor_outros', 'horas_outros', 'icone', 'posicao', 'quantidade_horas' ];
}


