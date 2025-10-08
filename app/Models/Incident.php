<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    protected $table = 'incidents';

    protected $fillable = [
        'description',
        'gravite',
        'date',
        'patient_id'
    ];

    protected $casts = ['date' => 'date'];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public static function addIncidentToPatient(Patient $patient, string $description, int $gravite, string $date)
    {
        return $patient->incidents()->create([
            'description' => $description,
            'gravite' => $gravite,
            'date' => $date,
        ]);
    }

    public function removeIncidentFromPatient(): bool
    {
        return (bool) $this->delete();
    }
}
