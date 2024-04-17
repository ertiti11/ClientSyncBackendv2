<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;


    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function works()
    {
        return $this->hasMany(Work::class);
    }
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
