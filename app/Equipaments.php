<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipaments extends Model
{
    protected $fillable = ['nome','marca','descricao','condicao','dataaquisicao'];
}
