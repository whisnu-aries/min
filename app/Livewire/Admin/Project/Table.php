<?php

namespace App\Livewire\Admin\Project;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public $search = "";
    
    public function render()
    {
        $projects = $this->searchProjects($this->search);
        return view('livewire.admin.project.table', ['data' => $projects]);
    }

    public function searchProjects($search)
    {
        $query = Project::query();
        $query->orderBy('created_at', 'DESC');

        if ($search) {
            $query->where('name', 'like', "%{$search}%");
        }

        return $query->paginate(10); // Paginate results (optional)
    }
}
