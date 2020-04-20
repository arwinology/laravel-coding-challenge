<?php

use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // array of specific hotels to populate database
        $companies = [
            [
                'name' => 'Accenture',
                'location' => 'BGC Taguig',
                'description' => 'BPO Company',
                'image' => 'https://placeimg.com/640/480/arch'
            ],
            [
                'name' => 'IBM Technologies',
                'location' => 'Cubao, Queszon City',
                'description' => 'International Tech Company.',
                'image' => 'https://placeimg.com/640/480/arch'
            ],
            [
                'name' => 'PHO Marketing',
                'location' => 'Ortigas, Pasig City',
                'description' => 'Digital Marketing Company',
                'image' => 'https://placeimg.com/640/480/arch'
            ],
            [
                'name' => 'Texas Trading, Inc.',
                'location' => 'Mandaluyong City',
                'description' => 'Engineering Company',
                'image' => 'https://placeimg.com/640/480/arch'
            ],
            [
                'name' => 'ABC Communications',
                'location' => 'Bustos, Bulacan',
                'description' => 'Network Company',
                'image' => 'https://placeimg.com/640/480/arch'
            ]
        ];

        foreach ($companies as $company) {
            Company::create(array(
                'name' => $company['name'],
                'location' => $company['location'],
                'description' => $company['description'],
                'image' => $company['image']
            ));
        }
    }
}