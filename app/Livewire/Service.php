<?php

namespace App\Livewire;

use App\Models\Service as ModelsService;
use Livewire\Component;

class Service extends Component
{
    public $services;

    public $type = "marketing";


    public function mount()
    {
        $service = new ModelsService();
        $this->services = $service->get_service_by_type($this->type);
    }

    public function change_type($type)
    {
        $this->type = $type;
        $service = new ModelsService();
        $this->services = $service->get_service_by_type($this->type);
    }

    public function render()
    {
        return view('livewire.service');
    }
}
