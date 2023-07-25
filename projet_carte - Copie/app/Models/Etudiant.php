<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $filiable=[
        'id',
        'nom',
        'prenom',
        'matricule',
        'nationnalite',
        'cycle',
        'filliere',
        'niveau_etude',
        'annee_academique',
        'photo',

    ];
}
