<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Reynaldi Lusikooy',
            'email' => 'hello@astera.ltd',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole("superadmin");
    }
}
