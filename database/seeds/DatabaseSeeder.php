<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        factory(\App\Cliente::class,10)->create()->each(function ($cliente){
            foreach (range(1,20) as $a) {
                $cliente->enderecos()->save(factory(\App\Endereco::class)->make());
            }
        });
    }
}
