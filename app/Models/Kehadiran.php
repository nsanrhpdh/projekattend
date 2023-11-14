<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kehadiran extends Model
{
    use HasFactory;

    public $table = 'kehadiran';

    protected $fillable = [
        'id_kehadiran', 'id_siswa', 'id_admin', 'waktu', 'tipe'
    ];
}
