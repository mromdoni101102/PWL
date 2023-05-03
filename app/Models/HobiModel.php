<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HobiModel extends Model
{
    use HasFactory;
    protected $table = 'hobis';
    protected $fillable = [
        'Nama_Hobi',
        'Jenis_Hobi',
        'Durasi_Hobi'
    ];
}
