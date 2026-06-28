<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            // Backend & Frameworks
            ['name' => 'PHP',                   'category' => 'Backend & Frameworks', 'level' => 'Advanced',     'sort_order' => 1],
            ['name' => 'Laravel',               'category' => 'Backend & Frameworks', 'level' => 'Advanced',     'sort_order' => 2],
            ['name' => 'Yii2',                  'category' => 'Backend & Frameworks', 'level' => 'Intermediate', 'sort_order' => 3],

            // APIs & Integration
            ['name' => 'REST API Integration',  'category' => 'APIs & Integration',   'level' => 'Advanced',     'sort_order' => 4],
            ['name' => 'SATUSEHAT Bridging',    'category' => 'APIs & Integration',   'level' => 'Intermediate', 'sort_order' => 5],
            ['name' => 'BPJS Bridging',         'category' => 'APIs & Integration',   'level' => 'Intermediate', 'sort_order' => 6],

            // Databases
            ['name' => 'PostgreSQL',            'category' => 'Databases',            'level' => 'Intermediate', 'sort_order' => 7],
            ['name' => 'MySQL',                 'category' => 'Databases',            'level' => 'Intermediate', 'sort_order' => 8],
            ['name' => 'Query Troubleshooting', 'category' => 'Databases',            'level' => 'Advanced',     'sort_order' => 9],

            // Quality & Operations
            ['name' => 'QA / Testing',          'category' => 'Quality & Operations', 'level' => 'Intermediate', 'sort_order' => 10],
            ['name' => 'Production Support',    'category' => 'Quality & Operations', 'level' => 'Advanced',     'sort_order' => 11],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}
