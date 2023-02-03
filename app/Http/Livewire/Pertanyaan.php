<?php

namespace App\Http\Livewire;

use App\Models\Pertanyaans;
use Livewire\Component;
use App\Models\Rating;

class Pertanyaan extends Component
{
    public function render()
    {
        $this->pertanyaans = Pertanyaans::all();
        $pertanyaans=$this->pertanyaans;
        return view('livewire.pertanyaan', compact('pertanyaans'));
        // return view('livewire.pertanyaan');
    }
    public $data_skms;
    public function mount()
    {
        $this->data_skms = Rating::all();
    }
}
