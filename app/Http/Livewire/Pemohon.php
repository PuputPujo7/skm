<?php

namespace App\Http\Livewire;

use App\Models\DataUser;
use App\Models\Pemohons;
use Livewire\Component;

class Pemohon extends Component
{
    // use WithPagination;
    // public $request_id;
    // public $id;
    public $nama;
    public $no_telp;
    public $alamat;
    public $jenis_kelamin;
    public $pendidikan;
    public $usia;
    public $jenis_layanan;
    // public $paging, $search;
    // public $toast;


    public function submit()
    {
        $pemohons = $this->validate([
            // 'request_id' => 'nullable',
            // 'id',
            'nama' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'pendidikan' => 'required',
            'usia' => 'required',
            'jenis_layanan' => 'required',
        ]);
  
        Pemohons::create($pemohons);
        // $data_user=$this->toast;
        // dd($this-);
        // return Redirect()->route('livewire.survey')->with('success','Data tamu sudah disimpan');
        return Redirect()->route('/survey/{id}')->extends('layouts.app1')->with('success','Data tamu sudah disimpan');
        
    }
    public function render()
    {
        return view('livewire.pemohon')->extends('layouts.app1');
    }
}
