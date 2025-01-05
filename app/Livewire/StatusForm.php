<?php

namespace App\Livewire;

use App\Models\StatusKitab;
use Livewire\Component;

class StatusForm extends Component
{

    public $name_kitabs;
    public $isSubmitted = false;

    protected $rules = [
        'name_kitabs' => 'required|string|max:255',
    ];

    public function submit()
    {
        $this->validate();
        StatusKitab::create(['name_kitabs' => $this->name_kitabs]);
        $this->isSubmitted = true;
    }
    public function render()
    {
        return view('livewire.status-form');
    }
}
