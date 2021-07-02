<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create([
            'name' => 'Super Admin',
            'email' => 'sa@user.com',
            'password' => bcrypt('123'),
        ]);
        
        $user1->assignRole('super admin');
        
        $user2 = User::create([
            'name' => 'Admin',
            'email' => 'admin@user.com',
            'password' => bcrypt('123'),
        ]);
        
        $user2->assignRole('admin');
        
        $user3 = User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('123'),
        ]);
        
        $user3->assignRole('user');
        
    }
}
