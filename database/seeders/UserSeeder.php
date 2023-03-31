<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /** 
     *  Run the database seeds.
     *
     *
     *@return void
      
     */
    public function run()
    {
        User::create([
             "name" => 'Juan David Rico Cerquera',
             "email" => 'morricito.cerquera@gmail.com',
             'password' => bcrypt('12345678')
        ])->assignRole('Admin');
        User::factory(9)->create();
        
        User::create([
            "name" => 'Juan Daniel Pobre Quecera',
            "email" => 'domingolunes314@gmail.com',
            'password' => bcrypt('12345678')
       ])->assignRole('Blogger');
       User::factory(9)->create();
    }
}