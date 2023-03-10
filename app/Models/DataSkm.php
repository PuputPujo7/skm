<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSkm extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table ='hasil_ratings';
    protected $fillable = [
        'pemohon_id',
        'pertanyaan_id',
        'answer',
        'review',
    ];
}
