<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveySkm extends Model
{
    // use HasFactory;
    protected $casts = [
        'answer' => 'array'
      ];
  
      protected $fillable = [
          'rating',
          'answer',
      ];
  }
