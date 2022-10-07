<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kelompok extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id', 'id');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function mahasiswa2(){
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id2', 'id');
    }
}
