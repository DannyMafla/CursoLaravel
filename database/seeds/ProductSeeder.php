<?php

use App\products;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        products::insert([
        	'code' => 'ABCD',
        	'name' => 'TABLERO7 ABCD',
        	'status' => 'A' 
        ]);
    }
}
