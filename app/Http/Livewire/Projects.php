<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;
use App\Models\User;


class Projects extends Component
{

    public $projects,$users, $name, $description, $homepage, $is_public, $parent_id, $author_id, $identifier, $status, $has_shared_budget, $project_id;
    public $updateMode = false;

    public function render()
    {
        $this->projects = Project::all();
        $this->users = User::all();
        return view('livewire.projects');
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->description = '';
        $this->homepage = '';
        $this->is_public = '';
        $this->parent_id = '';
        $this->author_id = '';
        $this->identifier = '';
        $this->status = '';
        $this->has_shared_budget = '';
    }

    public function store()
    {
        $validatedDate =  $this->validate([
            'name' => 'required',
            'description' => 'required',
            'homepage' => 'required',
            'is_public' => 'required',
            'parent_id' => 'required',
            'author_id' => 'required',
            'identifier' => 'required',
            'status' => 'nullable',
        ]);

        Project::create($validatedDate);
        session()->flash('message', 'Project Created Successfully.');
        $this->resetInputFields();
    }
    // 
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $this->project_id = $id;
        $this->name = $project->name;
        $this->description = $project->description;
        $this->homepage = $project->homepage;
        $this->is_public = $project->is_public;
        $this->parent_id = $project->parent_id;
        $this->author_id = $project->author_id;
        $this->identifier = $project->identifier;
        $this->status = $project->status;
        $this->has_shared_budget = $project->has_shared_budget;

        $this->updateMode = true;
    }

    public function update()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'description' => 'required',
            'homepage' => 'required',
            'is_public' => 'required',
            'parent_id' => 'required',
            'author_id' => 'required',
            'identifier' => 'required',
            'status' => 'required',
            'has_shared_budget' => 'required',
        ]);

        if ($this->project_id) {
            $project = Project::find($this->project_id);
            $project->update([
                'name' => $this->name,
                'description' => $this->description,
                'homepage' => $this->homepage,
                'is_public' => $this->is_public,
                'parent_id' => $this->parent_id,
                'author_id' => $this->author_id,
                'identifier' => $this->identifier,
                'status' => $this->status,
                'has_shared_budget' => $this->has_shared_budget,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Project Updated Successfully.');
            $this->resetInputFields();
        }
    }

    public function delete($id)
    {
        if ($id) {
            Project::where('id', $id)->delete();
            session()->flash('message', 'Project Deleted Successfully.');
        }
    }
}
