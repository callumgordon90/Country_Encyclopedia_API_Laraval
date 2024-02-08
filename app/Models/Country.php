<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable (by eloquent orm):
     *
     * @var array
     */
    
     protected $fillable = [
        'name',
        'capital',
        'national_sport',
        'national_food',
        'population',
        'nuclear_power',
        'continent',
        'government_type',
    ];
}
