<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    public function works()
    {
        return $this->hasMany(Work::class);
    }
    public function clients()
    {
        return $this->belongsTo(Client::class);
    }
}
