<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laracrud extends Model
{
    use HasFactory;

    protected $table = 'laracrud';

    protected $fillable = [
        'nim',
        'nama',
        'prodi',
        'kelas',
        'email',
    ];
}
