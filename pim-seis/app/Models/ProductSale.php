<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSale extends Model
{
    use HasFactory;

    public function productSale() {
        return $this->hasMany(RegisterProduct::class);
    }

    public function makeSaleProductSale(){
        return $this->belongsToMany(MakeSale::class);
    }
}
