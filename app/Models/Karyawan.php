<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama_karyawan',
        'tgl_lahir',
        'kota_lahir',
    ];
    protected $table = 'tbl_karyawan';
    public $timestamps = false;
}
