<?php

namespace App\Http\Controllers;

use App\Models\Incident;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IncidentController
{
    public function showIncidentForm(Patient $patient): View
    {
        $patient->findOrFail($patient->id);

        return view('createIncident', ['patient' => $patient]);
    }

    public function createIncident(Patient $patient, Request $request)
    {
        $patient_id = $patient->findOrFail($patient->id);

        Incident::addIncidentToPatient(
            $patient_id,
            $request->description,
            (int)$request->gravite,
            $request->date
        );

        return redirect()->route('patients.show', ['patient' => $patient]);
    }

    public function deleteIncident(Patient $patient, Incident $incident)
    {
        if ($incident->patient_id !== $patient->id) {
            abort(404);
        }

        $incident->removeIncidentFromPatient();

        return redirect()->route('patient.details', $patient->id);
    }
}
