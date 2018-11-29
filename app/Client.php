<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['type','cpf_cnpj','name','name_fantasy',
        'email','address','number','city','uf','obs'];
}