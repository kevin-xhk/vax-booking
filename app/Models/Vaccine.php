<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;

    //defining relationship between vax centre and vax
    public function stockProvidedTo(){
        return $this->belongsToMany('VaccineCentre', 'vax_centre_has_vax')
            ->withPivot('stock')
            ->withTimestamps();
    }
}
