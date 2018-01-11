<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{

    protected $fillable = [
        'endereco',
        'cidade',
        'estado',
        'cep'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

}