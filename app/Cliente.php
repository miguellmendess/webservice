<?php
/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 27/12/2017
 * Time: 11:40
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

    protected $fillable = [
        'nome',
        'email',
        'telefone'
    ];

    public function enderecos()
    {
        return $this->hasMany(Endereco::class);
    }

}