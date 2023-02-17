<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilRating extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table ='hasil_ratings';
    protected $fillable = [
        // 'pemohon_id',
        // 'pertanyaan_id',
        'amount',
        'review',
    ];
}
