<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'user_id', 'position_id', 'card_number', 'join_date', 'tanggal_lahir', 'tempat_lahir', 'bpjs_kesehatan', 'bpjs_ketenagakerjaan', 'status', 'nama_rekening', 'no_rekening', 'pemilik_rekening', 'jumlah_cuti'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
