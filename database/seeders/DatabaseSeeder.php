<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Accountant;
use App\Models\Doctor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


      User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        'password' => Hash::make('password'),
        'phone'=>'0123456789',
        'address'=>'123 Main St',
        'image'=>'https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50.jpg',
        'gender'=>'male',
        'date_of_birth'=>'2000-01-01',
        'status'=>'active',
        'linkedin'=>'https://www.linkedin.com/in/testuser',
        'facebook'=>'https://www.facebook.com/testuser',
        'twitter'=>'https://www.twitter.com/testuser',
        'website'=>'https://www.testuser.com',
        'about'=>'Test User About',
        'username'=>'testuser',
        ]);
//         Admin::create([
//             'name' => 'Admin',
//             'email' => 'admin@example.com',
//             'password' => Hash::make('password'),
//         ]);
//         Accountant::create([
//             'name' => 'Accountant',
//             'email' => 'accountant@example.com',
//             'password' => Hash::make('password'),
//         ]);
//         Doctor::create([
//             'name' => 'Doctor',
//             'username' => 'doctor',
//             'email' => 'doctor@example.com',
//             'password' => Hash::make('password'),
//         ]);
    }
}
