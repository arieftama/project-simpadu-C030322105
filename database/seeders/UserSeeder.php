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
        User::factory(25)->create();

        User::create([
            'name' => 'Ahmad Arief Maulana',
            'email' => 'c030322105@mahasiswa.poliban.ac.id',
            'email_verified_at' => now(),
            'password' => Hash::make('c030322105'),
            'roles' => 'mahasiswa',
        ]);
    }
}
