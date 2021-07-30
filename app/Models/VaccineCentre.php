<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccineCentre extends Model
{
    use HasFactory;

    //defining relationship between vax centre and vax
    public function vaccineStock(){
        return $this->belongsToMany('Vaccine', 'vax_centre_has_vax')
            ->withPivot('stock')
            ->withTimestamps();
    }
}
