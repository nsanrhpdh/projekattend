<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keterlambatan extends Model
{
    use HasFactory;

    public $table = 'keterlambatan';

    protected $fillable = [
        'id_terlambat', 'id_siswa', 'id_admin', 'waktu', 'tipe'
    ];
}
