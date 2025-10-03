<?php

namespace App\Http\Controllers;

use App\Models\Incident;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IncidentController
{
    public function showIncidentForm($id): View
    {
        $patient = Patient::findOrFail($id);

        return view('createIncident', compact('patient'));
    }

    public function createIncident($patient_id, Request $request): View
    {
        $patient = Patient::findOrFail($patient_id);

        Incident::create([
            'patient_id' => $patient->id,
            'description' => $request->description,
            'gravite' => $request->gravite,
            'date' => $request->date
        ]);

        $incidents = Incident::all()->where('patient_id', $patient->id);

        return view('patientDetails', compact('incidents', 'patient'));
    }
}
