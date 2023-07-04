<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $factory->define(App\User::class, function (Faker $faker) {
        //     return [
        //         'name' => Faker()->name,
        //         'email' => $faker->unique()->safeEmail,
        //         'email_verified_at' => now(),
        //         'password' => bcrypt('123123123'), // password
        //         'remember_token' => Str::random(10),
        //     ];
        // });

        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'profile_image' => 'image1.jpg',
                'password' => bcrypt('secret'),
            ]);
    }
    }
}
