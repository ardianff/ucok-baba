<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users = [[
            'name' => 'Ardian F Firmansyah',
            'username' => 'ardianfm',
            'email' => 'ardianfirmansyah123@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('ardian123', [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ])
        ]];
        foreach ($users as $us) {
            User::updateOrCreate(array('username' => $us['username']), $us);
        }
    }
}
