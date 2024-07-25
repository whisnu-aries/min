<?php

namespace App\Livewire\Admin\Client;

use App\Models\Client;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public $search = "";
    
    public function render()
    {
        $clients = $this->searchClients($this->search);
        return view('livewire.admin.client.table', ['data' => $clients]);
    }

    public function searchClients($search)
    {
        $query = Client::query();
        $query->orderBy('created_at', 'DESC');

        if ($search) {
            $query->where('name', 'like', "%{$search}%");
        }

        return $query->paginate(10); // Paginate results (optional)
    }
}
