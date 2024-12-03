<?php

namespace Database\Seeders;

use App\Models\Person;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $person = Person::create([
            'fullname' => 'Jhonattan',
            'email' => 'jhonattan@gmail.com',
            'document_number' => '12345678910',
            'birthdate' => '1990-01-01',
            'type' => 'physical',
            'status' => 'active',
            'notes'=> 'admin',
            'photo' => 'photo',
            'phone' => 'phone',
            'cellphone' => 'cellphone'

        ]);

        User::create([
            'person_id' => $person->id,
            'email' => 'jhonattan@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
