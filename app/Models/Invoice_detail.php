<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoicedetails extends Model
{
    use HasFactory;


    protected $fillable = ['product_id','bill_id', 'price'];


    public function product () {
        return $this->belongsTo(Product::class);
    }


    public function bill () {
        return $this->belongsTo(Bill::class);
    }
}
