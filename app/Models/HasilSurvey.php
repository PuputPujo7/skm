<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class HasilSurvey extends Model
// {
//     use HasFactory;
// }
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HasilSurvey extends Model
{
    use HasFactory;

    protected $fillable = [
        'pemohon_id',
        'pertanyaan_id',
        'amount',
    ];

    // public function lakonePandu(): BelongsTo {
    //     return $this->belongsTo(LakonePandu::class);
    // }
}