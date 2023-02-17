<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Illuminate\Contracts\View\View;

class Post extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    public $title;
    public $body;
    public $slug;
    public $image;

    protected function getFormSchema(): array 
    {
        return [
            Forms\Components\TextInput::make('title')->required(),
            Forms\Components\MarkdownEditor::make('body'),
            Forms\Components\TextInput::make('slug'),
            FileUpload::make('image'),
            // ...
        ];
    } 

    public function submit()
    {
        dd($this->title);
        // $data_users = $this->validate([
        //     // 'request_id' => 'nullable',
        //     'nama' => 'required',
        //     'no_telp' => 'required',
        //     'alamat' => 'required',
        //     'jenis_kelamin' => 'required',
        //     'pendidikan' => 'required',
        //     'usia' => 'required',
        //     'jenis_layanan' => 'required',
        // ]);
  
        // Pemohons::create($data_users);
        // return Redirect()->route('livewire.survey')->with('success','Data tamu sudah disimpan');
        
    }
    
    public function render()
    {
        return view('livewire.post');
    }
}
