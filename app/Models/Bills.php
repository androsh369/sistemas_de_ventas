<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    use HasFactory;

    protected $fillable = ['client_id','employee_id', 'price', 'date', 'subtotal', 'total'];


    public function client () {
        return $this->belongsTo(Client::class);
    }


    public function employee () {
        return $this->belongsTo(Employee::class);
    }
}

