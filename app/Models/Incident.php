<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    /**
     * @method static \Illuminate\Database\Eloquent\Builder|static create(array $attributes = [])
     */

    protected $table = 'incidents';

    protected $fillable = [
        'description',
        'gravite',
        'date',
        'patient_id'
    ];

    public static function addIncidentToPatient(Patient $patient, string $description, int $gravite, string $date)
    {
        return $patient->incidents()->create([
            'description' => $description,
            'gravite' => $gravite,
            'date' => $date,
        ]);
    }
}
