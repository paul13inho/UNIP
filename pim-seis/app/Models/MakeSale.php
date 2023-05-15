<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MakeSale extends Model
{
    use HasFactory;

    public function productSale(){
        return $this->hasOne(ProductSale::class);
    }

    public function clientSale(){
        return $this->hasOne(ClientSale::class);
    }
}
