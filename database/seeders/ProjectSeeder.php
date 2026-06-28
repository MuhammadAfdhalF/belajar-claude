<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title'          => 'SATUSEHAT Bridging Integration',
                'slug'           => 'satusehat-bridging-integration',
                'summary'        => 'Integration service connecting clinic and hospital systems to the SATUSEHAT national health platform.',
                'description'    => 'Built and maintained a bridging layer that exchanges patient and encounter data with SATUSEHAT through secure REST APIs, including authentication, data mapping, and error handling.',
                'tech_stack'     => ['Laravel', 'REST API', 'SATUSEHAT', 'PostgreSQL'],
                'repository_url' => null,
                'demo_url'       => null,
                'is_featured'    => true,
                'sort_order'     => 1,
            ],
            [
                'title'          => 'BPJS Bridging Service',
                'slug'           => 'bpjs-bridging-service',
                'summary'        => 'Bridging module for BPJS eligibility checks and claim data exchange.',
                'description'    => 'Implemented authenticated REST API integration for BPJS eligibility verification and claim submission, with logging and retry handling for reliability.',
                'tech_stack'     => ['PHP', 'Yii2', 'REST API', 'BPJS'],
                'repository_url' => null,
                'demo_url'       => null,
                'is_featured'    => true,
                'sort_order'     => 2,
            ],
            [
                'title'          => 'Production Support & DB Troubleshooting',
                'slug'           => 'production-support-db-troubleshooting',
                'summary'        => 'Ongoing production support resolving PostgreSQL and MySQL issues for live systems.',
                'description'    => 'Investigated and resolved performance and data-integrity issues across PostgreSQL and MySQL databases, supporting production releases and QA verification.',
                'tech_stack'     => ['PostgreSQL', 'MySQL', 'Production Support', 'QA'],
                'repository_url' => null,
                'demo_url'       => null,
                'is_featured'    => false,
                'sort_order'     => 3,
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
