<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    /**
     * @method static \Illuminate\Database\Eloquent\Builder|static create(array $attributes = [])
     */

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

}
