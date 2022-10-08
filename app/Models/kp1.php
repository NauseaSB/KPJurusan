<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kp1 extends Model
{
    use HasFactory;

    public function kelompok()
    {
        return $this->hasOne(Kelompok::class);
    }
}
