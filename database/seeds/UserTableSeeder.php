<?php
/**
 * Created by PhpStorm.
 * User: i7618
 * Date: 2015/5/29
 * Time: 下午 06:18
 */

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

    public function run()
    {
        $this->command->info('Deleting existing Person table ...');

        $faker = Faker::create();

        for ($i=0; $i < 10; $i++) {
            DB::table('users')->insert(array(
                'name'   =>  $faker->name,
                'email'    =>  $faker->companyEmail,
                'password'    =>  $faker->password,
            ));
        }
    }

}