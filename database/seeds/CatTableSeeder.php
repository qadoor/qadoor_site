<?php

use Illuminate\Database\Seeder;
use App\Cat;

class CatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name'=>'Android'],
            ['name'=>'Web前端'],
            ['name'=>'IOS'],
            ['name'=>'后台'],
            ['name'=>'产品'],
            ['name'=>'需求'],
            ['name'=>'设计']
        ];

        foreach ($categories as $key => $value) {
            Cat::create($value);
        }
    }
}
