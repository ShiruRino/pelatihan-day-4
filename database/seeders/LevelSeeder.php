<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels = [
            ['level_name'=>'Pimpinan'],
            ['level_name'=>'Pic'],
            ['level_name'=>'Instruktur'],
            ['level_name'=>'Peserta'],
        ];
        foreach ($levels as $value) {
            Level::create([
                'level_name'=> $value['level_name'],
            ]);
        }
    }
}
