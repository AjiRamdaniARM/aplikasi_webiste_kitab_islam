<?php

namespace App\Livewire;

use App\Models\StatusKitab;
use Livewire\Component;

class StatusForm extends Component
{

    public $name_status;
    public $isSubmitted = false;

    protected $rules = [
        'name_status' => 'required|string|max:255',
    ];

    public function submit()
    {
        $this->validate();
        StatusKitab::create(['name_status' => $this->name_status]);
        $this->isSubmitted = true;
    }
    public function render()
    {
        return view('components.admin.partials.all-data.components.status-form');
    }
}
