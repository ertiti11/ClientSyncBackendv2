<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;


    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function invoices()
    {
        return $this->belongsTo(Invoice::class);
    }
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
