<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //factory(\App\Tag::class, 20)->create();

        $tags = [
            ['name'=>'JavaScript'],
            ['name'=>'PHP'],
            ['name'=>'Python'],
            ['name'=>'Java'],
            ['name'=>'Mysql'],
            ['name'=>'IOS'],
            ['name'=>'Android'],
            ['name'=>'Node'],
            ['name'=>'H5'],
            ['name'=>'Linux'],
            ['name'=>'C++'],
            ['name'=>'CSS3'],
            ['name'=>'Git'],
            ['name'=>'Golang']
        ];

        foreach ($tags as $key => $value) {
            \App\Tag::create($value);
        }
    }
}
