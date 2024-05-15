<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    // tabela para os cadastro/login
    protected $table = 'tbcliente';

    public $fillable = ['idCliente',  'nomeCliente', 'userCliente', 'emailCliente', 'senhaCliente'];
    
    public $timestamps = false;

}
