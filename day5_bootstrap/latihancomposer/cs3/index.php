<?php
require_once 'vendor/fzaninotto/Faker/src/autoload.php';

$faker = Faker\Factory::create();

// generate data by accessing properties
echo $faker->name;

echo "<br>";

echo $faker->address;

echo "<br>";
  // "426 Jordy Lodge
  // Cartwrightshire, SC 88120-6700"
echo $faker->text;



?>