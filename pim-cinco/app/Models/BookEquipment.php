<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookEquipment extends Model
{
    use HasFactory;

    public function dayShift() {
        return $this->belongsTo(DayShift::class);
    }

    public function classShift() {
        return $this->belongsTo(ClassShift::class);
    }

    public function equipment() {
        return $this->belongsTo(Equipment::class);
    }
}
