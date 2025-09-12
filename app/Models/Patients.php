<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'dateNaissance',
        'lieuNaissance',
        'sexe',
        'poids',
        'rue',
        'ville',
        'codePostal'
    ];
}
