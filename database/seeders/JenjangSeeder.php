<?php

namespace Database\Seeders;

use App\Models\Jenjang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenjangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $jenjang = [
            [
                'nama' => 'PAUD Sederajat',
            ],
            [
                'nama' => 'TK Sederajat',
            ],
            [
                'nama' => 'SD Sederajat',
            ],
            [
                'nama' => 'SMP Sederajat',
            ],
            [
                'nama' => 'SMA Sederajat',
            ],
            [
                'nama' => 'Universitas/Akademisi',
            ],
        ];
        foreach ($jenjang as $jen) {
            Jenjang::create($jen);
        }
    }
}
