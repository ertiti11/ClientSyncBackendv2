<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    public function works()
    {
        return $this->belongsTo(Work::class);
    }
    public function clients()
    {
        return $this->belongsTo(Client::class);
    }
}
