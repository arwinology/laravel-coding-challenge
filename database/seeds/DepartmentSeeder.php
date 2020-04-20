<?php

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // array of specific rooms to populate database
        $departments = [
            [
                'company_id' => 1,
                'type' => 'IT',
                'description' => 'Doing the IT Works',
                'image' => 'https://placeimg.com/640/480/arch'
            ],
            [
                'company_id' => 1,
                'type' => 'Operations',
                'description' => 'Operations and Networks',
                'image' => 'https://placeimg.com/640/480/arch'
            ],
            [
                'company_id' => 2,
                'type' => 'Marketing',
                'description' => 'Marketing and Financials',
                'image' => 'https://placeimg.com/640/480/arch'
            ],
            [
                'company_id' => 2,
                'type' => 'IT',
                'description' => 'Doing IT Works',
                'image' => 'https://placeimg.com/640/480/arch'
            ],
            [
                'company_id' => 3,
                'type' => 'Digital',
                'description' => 'Digital ang Graphics',
                'image' => 'https://placeimg.com/640/480/arch'
            ],
            [
                'company_id' => 3,
                'type' => 'IT',
                'description' => 'Doing the IT Works',
                'image' => 'https://placeimg.com/640/480/arch'
            ],
            [
                'company_id' => 4,
                'type' => 'Operations',
                'description' => 'Operations and Networks',
                'image' => 'https://placeimg.com/640/480/arch'
            ],
            [
                'company_id' => 4,
                'type' => 'Marketing',
                'description' => 'Marketing and Financials',
                'image' => 'https://placeimg.com/640/480/arch'
            ],
            [
                'company_id' => 5,
                'type' => 'IT',
                'description' => 'Doing IT Works',
                'image' => 'https://placeimg.com/640/480/arch'
            ],
            [
                'company_id' => 5,
                'type' => 'Digital',
                'description' => 'Digital ang Graphics',
                'image' => 'https://placeimg.com/640/480/arch'
            ]
        ];

        foreach ($departments as $department) {
            Department::create(array(
                'company_id' => $department['company_id'],
                'type' => $department['type'],
                'description' => $department['description'],
                'image' => $department['image']
            ));
        }
    }
}