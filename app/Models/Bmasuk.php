<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bmasuk extends Model
{
    use HasFactory;
    public function Stok()
    {
        return $this->belongsTo(Stok::class);
    }
    public function Suplayer()
    {
        return $this->belongsTo(Suplayer::class);
    }
}
