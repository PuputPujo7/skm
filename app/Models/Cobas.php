<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cobas extends Model
{
    use HasFactory;
    protected  $guarded=[];
    protected $table ='cobas';
    protected $fillable = [
    'nama',
    'alamat',
    ];
}
