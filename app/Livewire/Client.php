<?php

namespace App\Livewire;

use App\Models\Client as ModelsClient;
use Livewire\Component;

class Client extends Component
{
    public $clients;

    public function mount()
    {
        $this->clients = ModelsClient::get();
    }

    public function render()
    {
        return view('livewire.client');
    }
}
