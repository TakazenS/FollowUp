<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';

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

    public function incidents()
    {
        return $this->hasMany(Incident::class);
    }
}
