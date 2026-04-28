<?php

namespace Database\Seeders;

use App\models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::create(['name'=> 'teknik informatika']);
        Department::create(['name'=> 'sistem informasi']);
        Department::create(['name'=> 'bisnis digital']);
        Department::create(['name'=> 'teknologi informasi']);
        Department::create(['name'=> 'pendidikan teknologi informasi']);
        Department::create(['name'=> 'magister komputer']);

    }
}
