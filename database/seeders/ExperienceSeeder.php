<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    public function run(): void
    {
        Experience::create([
            'company'    => 'Healthcare Technology Company',
            'position'   => 'Software Developer',
            'location'   => 'Indonesia',
            'start_date' => '2022-01-01',
            'end_date'   => null,
            'is_current' => true,
            'summary'    => 'Develop and maintain web applications using Laravel and Yii2. Integrate REST APIs and build SATUSEHAT and BPJS bridging for healthcare data exchange. Troubleshoot PostgreSQL and MySQL issues, provide production support, and run QA testing to keep releases stable.',
            'sort_order' => 1,
        ]);
    }
}
