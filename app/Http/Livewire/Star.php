<?php

namespace App\Http\Livewire;

use App\Models\Pertanyaans;
use Livewire\Component;

class Star extends Component
{
    public function render()
    {
        return view('livewire.star');
    }
    // public $pertanyaans;
    // public function mount($id)
    // {
    //     $this->pertanyaans = Pertanyaans::find($id);
    //     return view('livewire.pertanyaan', compact('pertanyaans'));
    // }
}
