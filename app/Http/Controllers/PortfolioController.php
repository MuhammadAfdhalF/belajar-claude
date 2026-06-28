<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Skill;

class PortfolioController extends Controller
{
    /**
     * Show the public portfolio homepage.
     *
     * Projects, experiences, skills, and certifications come from the
     * database. Profile/about/contact content still comes from
     * config/portfolio.php (read directly in those section partials).
     */
    public function home()
    {
        // Only featured projects are shown on the homepage.
        $projects = Project::where('is_featured', true)
            ->orderBy('sort_order')
            ->get();

        $experiences = Experience::orderBy('sort_order')->get();

        $certifications = Certification::orderBy('sort_order')->get();

        // Group skills by category, keeping each group's sort order.
        $skillGroups = Skill::orderBy('sort_order')->get()->groupBy('category');

        return view('portfolio.home', compact(
            'projects',
            'experiences',
            'certifications',
            'skillGroups',
        ));
    }
}
