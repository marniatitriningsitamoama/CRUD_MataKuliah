<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KodeMataKuliah extends Model
{
    use HasFactory;
    protected $table = 'kodematakuliah';
    protected $fillable = 'kode_matkul';
}
 