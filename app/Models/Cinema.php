<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    use HasFactory;
    protected $table = 'tbCinema'; 
    public $fillabel= ['idCinema','nomeCinema','logradouroCinema','bairroCinema', 'cepCinema','emailCinema', 'senhaCinema','idFilmes','idIngressoFilme'];
   

   
    // protected $tbFilmes = 'tbfilmes';

    // protected $tbGenero = 'tbgenero';
    // protected $tbingressoFilme = 'tbingressoFilme';
    // protected $tbtipoIngresso = 'tbtipoIngresso';

    public $timestamps = false;
}
