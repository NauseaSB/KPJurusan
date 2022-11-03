<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status1 extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kelompok()
    {
        return $this->hasOne(Kelompok::class);
    }
}
