<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pulang extends Model
{
    use HasFactory;

    public $table = 'pulang';

    protected $fillable = [
        'id_pulang', 'id_siswa', 'id_admin', 'waktu', 'tipe'
    ];
}
