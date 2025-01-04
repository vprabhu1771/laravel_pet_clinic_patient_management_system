<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Enums\Gender;

use App\Models\Owner;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $owners = [
            [
                'name' => 'John Doe',
                'gender' => Gender::MALE,
                'email' => 'john.doe@example.com',
                'phone' => '1234567890',
            ],
            [
                'name' => 'Jane Doe',
                'gender' => Gender::FEMALE,
                'email' => 'jane.doe@example.com',
                'phone' => '0987654321',
            ]
        ];
        
        // Owner::insert($owners);

        foreach ($owners as $row) 
        {
            Owner::create($row);
        }
    }
}
