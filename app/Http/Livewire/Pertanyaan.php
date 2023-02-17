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
        return view('livewire.pertanyaan', compact('pertanyaans'))->extends('layouts.app1');
        // return view('livewire.pertanyaan');
    }
    // public $pertanyaans;
    // public function mount($id)
    // {
    //     $pertanyaans=$this->pertanyaans;
    // }
}
