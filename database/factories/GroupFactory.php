<?php

use Faker\Generator as Faker;
use Opencycle\Group;

$factory->define(Group::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});
