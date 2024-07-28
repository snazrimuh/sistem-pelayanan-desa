<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'username' => 'Admin Ngombakan',
            'email' => 'adminngombakan@gmail.com',
            'password' => 'admin123',
        ]);
    }
}