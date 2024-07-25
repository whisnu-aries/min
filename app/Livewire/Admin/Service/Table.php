<?php

namespace App\Livewire\Admin\Service;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public $search = "";
    
    public function render()
    {
        $services = $this->searchServices($this->search);
        return view('livewire.admin.service.table', ['data' => $services]);
    }

    public function searchServices($search)
    {
        $query = Service::query();
        $query->orderBy('created_at', 'DESC');

        if ($search) {
            $query
                ->where('name', 'like', "%{$search}%")
                ->orWhere('type', 'like', "%{$search}%");
        }

        return $query->paginate(10); // Paginate results (optional)
    }
}
