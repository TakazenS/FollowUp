<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use PhpParser\Builder\Class_;

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

    public function incidents(): HasMany
    {
        return $this->hasMany(Incident::class);
    }
}
