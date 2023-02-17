<?php

namespace App\Models;

use App\Http\Livewire\Star;
// use App\Models\Rating as ModelsRating;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Yepsua\Filament\Forms\Components\Star;

class Ratings extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table ='ratings';
    protected $fillable = [
        'pertanyaan_id',
        'answer'
    ];
    protected $casts = [
        'answer'=> 'array'
    ];

    public function pertanyaan() {
        return $this->belongsTo(Pertanyaans::class);
    }

}
