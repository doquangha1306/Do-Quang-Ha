<?php
require 'vendor/autoload.php';

$faker = Faker\Factory::create();

echo "Tên: " . $faker->name . "<br>";
echo "Địa chỉ: " . $faker->address . "<br>";
echo "Email: " . $faker->email . "<br>";
