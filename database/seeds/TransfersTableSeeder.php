<?php

use Illuminate\Database\Seeder;

class TransfersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transfers')->insert([[
            'description'=>'salario',
            'amount'=>'4800',
            'wallet_id'=>1,
            'created_at'=>date("d/m/y H:i:s"),
            'updated_at'=>date("d/m/y H:i:s")
        ],[
        'description'=>'Renta',
        'amount'=>'-1200',
        'wallet_id'=>1,
        'created_at'=>date("d/m/y H:i:s"),
        'updated_at'=>date("d/m/y H:i:s")
            
        ]]);
    }
}
