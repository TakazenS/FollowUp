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

    public function createIncident(Request $request, $id): View
    {
        $patient = Patient::findOrFail($id);

        Incident::addIncidentToPatient(
            $patient->id,
            $request->description,
            $request->gravite,
            $request->date
        );

        return view('patientDetails', compact('patient'));
    }
}
