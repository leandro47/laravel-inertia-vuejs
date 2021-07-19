<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fntransation extends Model
{
    use HasFactory;

    public function fncategory()
    {
        return $this->belongsTo(Fncategory::class);
    }

    public function fnwallet()
    {
        return $this->belongsTo(Fnwallet::class);
    }
}
