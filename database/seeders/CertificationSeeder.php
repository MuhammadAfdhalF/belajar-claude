<?php

namespace Database\Seeders;

use App\Models\Certification;
use Illuminate\Database\Seeder;

class CertificationSeeder extends Seeder
{
    public function run(): void
    {
        // Sample placeholder — replace with real certifications.
        Certification::create([
            'title'          => 'Sample Certification',
            'issuer'         => 'Issuing Organization',
            'issued_at'      => '2024-01-01',
            'credential_url' => null,
            'summary'        => 'Replace this sample with your real certifications.',
            'sort_order'     => 1,
        ]);
    }
}
