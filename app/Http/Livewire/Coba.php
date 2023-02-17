<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use App\Models\Cobas;
use Illuminate\Http\Request;
use Livewire\Component;

class Coba extends Component
{
    use WithPagination;
    public $alamat;
    public $nama;

  
    public function submit()
    {
    //    dd($this->alamat);
        // $coba = $this->validate([
        //     'alamat' => 'required',
        //     'nama' => 'required',
        // ]);
  
        $coba = Cobas::create([
            'alamat'     => $this->alamat,
            'nama'   => $this->nama
        ]);
        // Cobas::create($data);
        // $data=$this->toast;
        // return Redirect()->route('coba')->with('success','Data tamu sudah disimpan');
        // return Redirect()->route('coba');
        return redirect()->route('livewire.coba');
    }

    public function render()
    {
        $this->coba=Cobas::all();
        $cobas=$this->coba;
        return view('livewire.coba', compact('cobas'))->extends('layouts.app1');
    }


}
