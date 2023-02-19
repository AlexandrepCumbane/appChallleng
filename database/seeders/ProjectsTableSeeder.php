<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'name' => 'Project 1',
            'description' => 'This is the first project',
            'homepage' => 'http://example.com/project-1',
            'is_public' => true,
            'author_id' => 1,
            'identifier' => 'PROJ1',
            'status' => 'open',
            'has_shared_budget' => false,
        ]);
        
        Project::create([
            'name' => 'Project 2',
            'description' => 'This is the second project',
            'homepage' => 'http://example.com/project-2',
            'is_public' => false,
            'author_id' => 1,
            'identifier' => 'PROJ2',
            'status' => 'closed',
            'has_shared_budget' => true,
        ]);
        
        Project::create([
            'name' => 'Project 3',
            'description' => 'This is the third project',
            'homepage' => 'http://example.com/project-3',
            'is_public' => true,
            'author_id' => 1,
            'identifier' => 'PROJ3',
            'status' => 'archived',
            'has_shared_budget' => false,
        ]);    }
}
