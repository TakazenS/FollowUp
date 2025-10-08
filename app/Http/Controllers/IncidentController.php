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

    public function createIncident($patient_id, Request $request)
    {
        $patient = Patient::findOrFail($patient_id);

        Incident::addIncidentToPatient(
            $patient,
            $request->description,
            (int)$request->gravite,
            $request->date
        );

        return redirect('/patient/details/' . $patient_id);
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
