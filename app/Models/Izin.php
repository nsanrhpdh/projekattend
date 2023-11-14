<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Izin extends Model
{
    use HasFactory;

    public $table = 'izin';

    protected $fillable = [
        'id_izin', 'id_siswa', 'id_admin', 'waktu', 'tipe'
    ];
}
