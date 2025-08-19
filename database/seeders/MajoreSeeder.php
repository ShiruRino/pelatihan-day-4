<?php

namespace Database\Seeders;

use App\Models\Majore;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MajoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $majores = [
            ['majores_name' => 'Operator Komputer'],
            ['majores_name' => 'Web Programming'],
            ['majores_name' => 'Bahasa Korea'],
            ['majores_name' => 'Jaringan Komputer'],
        ];
        foreach ($majores as $v) {
            Majore::create([
                'majores_name'=> $v['majores_name'],
            ]);
        }
    }
}
