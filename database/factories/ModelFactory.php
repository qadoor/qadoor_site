<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/



$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Tag::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
    ];
});

$factory->define(App\Cat::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
    ];
});

//$factory->define(App\Question::class, function (Faker\Generator $faker) {
//    $cat_ids = App\Cat::lists('id')->toArray();
//    $user_ids = App\User::lists('id')->toArray();
//    $tag_ids = App\Tag::lists('id')->toArray();
//    return [
//        'title' => $faker->sentence,
//        'user_id' => $faker->randomElement($user_ids),
//        'tag_id' => $faker->randomElement($tag_ids),
//        'cat_id' => $faker->randomElement($cat_ids),
//        'content' => $faker->paragraph,
//        'votes' => rand()
//    ];
//});

// questions
$factory->define(App\Question::class, function (Faker\Generator $faker) {
//    $cat_ids = App\Cat::lists('id')->toArray();
    $user_ids = App\User::lists('id')->toArray();
//    $tag_ids = App\Tag::lists('id')->toArray();
    return [
        'title' => $faker->sentence,
        'reprint_link' => $faker->sentence,
        'user_id' => $faker->randomElement($user_ids),
        'content' => $faker->paragraph,
//        'clickcount' => rand(1, 100), // 点击数,下个版本数据库加入
        'votes' => rand(1, 100),
        'clickcount' => rand(1, 100)
    ];
});

// answers
$factory->define(App\Answer::class, function (Faker\Generator $faker) {
    $user_ids = App\User::lists('id')->toArray();
    $question_ids = App\Question::lists('id')->toArray();
    return [
        'user_id' => $faker->randomElement($user_ids),
        'question_id' => $faker->randomElement($question_ids),
        'content' => $faker->paragraph,
        'isaccept' => $faker->boolean,
        'votes' => rand(1, 100)
    ];
});

// comments
$factory->define(App\Comment::class, function (Faker\Generator $faker) {
    $user_ids = App\User::lists('id')->toArray();
    $answer_ids = App\Answer::lists('id')->toArray();
    return [
        'user_id' => $faker->randomElement($user_ids),
        'answer_id' => $faker->randomElement($answer_ids),
        'content' => $faker->paragraph
    ];
});



