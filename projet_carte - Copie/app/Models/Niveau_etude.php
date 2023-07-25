<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niveau_etude extends Model
{
    use HasFactory;
    protected $filiable=[
        'id',
        'niveau_etude',
        
    ];
}
