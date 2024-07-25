<?php

namespace App\Livewire;

use App\Models\Contact;
use App\Models\Service;
use Illuminate\Support\Str;

use Livewire\Attributes\Validate;
use Livewire\Component;

class ContactForm extends Component
{
    #[Validate('required|string')]
    public $name;

    #[Validate('required|string')]
    public $business_name;

    #[Validate('required|string|email')]
    public $email;

    #[Validate('required')]
    public $no_whatsapp;

    #[Validate('required|uuid')]
    public $service;

    #[Validate('required')]
    public $description;

    public function save()
    {
        $data = $this->validate();

        $service = Service::where('uuid', $this->service)->first();

        $contact = new Contact();
        $contact->uuid = Str::uuid();
        $contact->service_id = $service->id;
        $contact->name = $this->name;
        $contact->business_name = $this->business_name;
        $contact->email = $this->email;
        $contact->no_whatsapp = $this->no_whatsapp;
        $contact->description = $this->description;
        $contact->save();

        session()->flash('status', 'We Received your message, and we will contact you soon.');

        return back();
    }

    public function render()
    {
        $services = Service::all();

        return view('livewire.contact-form', compact('services'));
    }
}
