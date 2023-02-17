<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataUser extends Model
{
    use HasFactory;
    protected $table ='data_users';
    protected $fillable = [
    'request_id',
    'nama',
    'no_telp',
    'alamat',
    'sektor',
    'jenis_izin',
    'status'
    ];
}
