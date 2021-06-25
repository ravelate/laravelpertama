<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosenwali extends Model
{
    use HasFactory;
    protected $table = "dosenwali";

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class);
    }
}
