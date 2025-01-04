<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Enums\Gender;

use App\Models\Patient;

use App\Models\Owner;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $john_doe = Owner::where('name', 'John Doe')->first();

        $jane_doe = Owner::where('name', 'Jane Doe')->first();

        $patients = [
            [
                'name' => 'Buddy',
                'gender' => Gender::MALE,
                'date_of_birth' => '2020-05-10',
                'owner_id' => $john_doe->id,
                'type' => 'Dog',
            ],
            [
                'name' => 'Mittens',
                'gender' => Gender::FEMALE,
                'date_of_birth' => '2018-08-15',
                'owner_id' => $jane_doe->id,
                'type' => 'Cat',
            ],
            [
                'name' => 'Charlie',
                'gender' => Gender::MALE,
                'date_of_birth' => '2021-03-22',
                'owner_id' => $john_doe->id,
                'type' => 'Bird',
            ],
            [
                'name' => 'Bella',
                'gender' => Gender::FEMALE,
                'date_of_birth' => '2019-11-05',
                'owner_id' => $jane_doe->id,
                'type' => 'Rabbit',
            ]
        ];
        
        // Patient::insert($patients);

        foreach ($patients as $row) 
        {
            Patient::create($row);
        }
    }
}
