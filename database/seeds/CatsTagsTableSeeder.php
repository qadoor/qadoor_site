<?php

use Illuminate\Database\Seeder;

class CatsTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
//        $cat_ids = App\Cat::lists('id')->toArray();
//        $tag_ids = App\Tag::lists('id')->toArray();
        // 随机增加一些cat,tag到中间表
        for ($count = 1; $count < 20; $count++) {
            $cat_id = App\Cat::all()->random(1)->id;
            $tag_id = App\Tag::all()->random(1)->id;
            DB::table('cat_tag')->insert([
                'cat_id' => $cat_id,
                'tag_id'  => $tag_id
            ]);
        }
    }
}
