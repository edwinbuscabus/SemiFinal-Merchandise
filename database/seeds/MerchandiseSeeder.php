<?php

use Illuminate\Database\Seeder;

class MerchandiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'=> "Edwin Buscabus",
                'description'=>'Lami ko',
                'quantity'=> '5',
                'price'=> '100.00',
            ],
            [
                'name'=> "Winwin Amoy",
                'description'=>'Mas way lami',
                'quantity'=> '2',
                'price'=> '50.00',
            ],
        ];
        foreach($data as $m){
            \App\Merchandise::create($m);
        }
    }
}