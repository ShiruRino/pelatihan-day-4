<?php

namespace Database\Seeders;

use Hash;
use Faker\Factory;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $factory = Factory::create('id_ID');
        for( $i = 1; $i <= 5; $i++ ){
            User::create([
                'name'=> $factory->name(),
                'id_level'=> $i,
                'id_majore'=> $i !== 1 ? $i : null,
                'more_majores'=> null,
                'email'=> $factory->unique()->safeEmail(),
                'password'=> Hash::make('12345678'),
            ]);
        }
    }
}
