<?php

namespace App\Models;

use App\Http\Livewire\Survey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pemohons extends Model
{
    use HasFactory;
    protected  $guarded=[];
    protected $table ='pemohons';
    protected $fillable = [
    'nama',
    'alamat',
    'no_telp',
    'jenis_kelamin',
    'pendidikan',
    'usia',
    'jenis_layanan',
    ];

    public function hasilSurveys(): HasMany {
        return $this->hasMany(Survey::class);
    }
}
