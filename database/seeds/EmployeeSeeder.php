<?php

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // array of specific reservations to populate database
        $employees = [
            [
                'department_id' => 1,
                'first_name' => 'Juan',
                'last_name' => 'dela Cruz',
                'position' => 'Contractor',
                'hire_date' => '2020-05-28'
            ],
            [
                'department_id' => 2,
                'first_name' => 'Jenny',
                'last_name' => 'Lopez',
                'position' => 'Contractor',
                'hire_date' => '2009-01-28'
            ],
            [
                'department_id' => 2,
                'first_name' => 'Dennis',
                'last_name' => 'Trillo',
                'position' => 'Actor',
                'hire_date' => '2017-03-15'
            ],
            [
                'department_id' => 3,
                'first_name' => 'Juan',
                'last_name' => 'dela Cruz',
                'position' => 'Contractor',
                'hire_date' => '2020-05-28'
            ],
            [
                'department_id' => 4,
                'first_name' => 'Marian',
                'last_name' => 'Rivera',
                'position' => 'Agent',
                'hire_date' => '2020-05-28'
            ],
            [
                'department_id' => 5,
                'first_name' => 'Angel',
                'last_name' => 'Locsin',
                'position' => 'Developer',
                'hire_date' => '2018-12-28'
            ],
            [
                'department_id' => 6,
                'first_name' => 'Albert',
                'last_name' => 'Einstein',
                'position' => 'Engineer',
                'hire_date' => '1852-08-25'
            ],
            [
                'department_id' => 7,
                'first_name' => 'Mario',
                'last_name' => 'Brothers',
                'position' => 'Agent',
                'hire_date' => '2020-05-28'
            ],
            [
                'department_id' => 8,
                'first_name' => 'Angel',
                'last_name' => 'Aquino',
                'position' => 'Supervisor',
                'hire_date' => '2018-12-28'
            ],
            [
                'department_id' => 9,
                'first_name' => 'Albert',
                'last_name' => 'Martinez',
                'position' => 'Engineer',
                'hire_date' => '1852-08-25'
            ]
        ];

        foreach ($employees as $employee) {
            Employee::create(array(
                'department_id' => $employee['department_id'],
                'first_name' => $employee['first_name'],
                'last_name' => $employee['last_name'],
                'position' => $employee['position'],
                'hire_date' => $employee['hire_date']
            ));
        }
    }
}