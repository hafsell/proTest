<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
//fct de hash
use Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
'nom'=> 'admin',
'isAdmin'=>true,
'email' => 'hafsaelalami16@gmail.com',
'password' => Hash::make('admin12345')
        ]);
    }
}
