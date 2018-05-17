<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Student::class, function (Faker $faker) {
	$sexes = App\Models\Sex::pluck('sex_id')->all();
	
	return [
		'first_name' => $faker->firstName,
		'last_name'  => $faker->lastName,
		'sex_id'     => $faker->randomElement($sexes),
	];
});