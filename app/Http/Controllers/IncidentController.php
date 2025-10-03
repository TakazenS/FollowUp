<?php

namespace App\Http\Controllers;

use App\Models\Incident;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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

        Incident::create([
            'patient_id' => $patient->id,
            'description' => $request->description,
            'gravite' => $request->gravite,
            'date' => $request->date
        ]);

        return redirect('/patient/details/' . $patient_id);
    }
}
