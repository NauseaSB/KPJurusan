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
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function mahasiswa2()
    {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id2', 'id');
    }
    public function kp1()
    {
        return $this->belongsTo(kp1::class, 'kp_id', 'id');
    }
    public function materi()
    {
        return $this->belongsTo(Materi::class, 'materi_id', 'id');
    }
    public function kp2()
    {
        return $this->belongsTo(kp2::class, 'kp_id', 'id');
    }
    public function status1()
    {
        return $this->belongsTo(status1::class, 's_kp1', 'id');
    }
    public function status2()
    {
        return $this->belongsTo(status2::class, 's_kp2', 'id');
    }
    public function seminar()
    {
        return $this->belongsTo(Seminar::class, 'seminar_id', 'id');
    }
}
