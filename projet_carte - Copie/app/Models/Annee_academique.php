<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annee_academique extends Model
{
    use HasFactory;
    protected $filiable=[
        'id',
        'annee_academique',
        
    
    ];
}
