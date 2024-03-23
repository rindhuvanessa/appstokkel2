<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bkeluar extends Model
{
    use HasFactory;
    public function Stok()
    {
        return $this->belongsTo(Stok::class);
    }
    public function Pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }
}
