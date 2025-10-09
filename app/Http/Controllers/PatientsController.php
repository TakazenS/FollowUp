<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\View\Factory;

class PatientsController extends Controller
{

    public function showPatients(): View | Factory
    {
        $patients = Patient::all();

        return view('patients', ['patients' => $patients]);
    }

    public function showPatientDetails(Patient $patient): View
    {
        $patient->load(['incidents' => fn($q) => $q->latest()]);
        $incidents = $patient->incidents;

        return view('patientDetails', ['patient' => $patient, 'incidents' => $incidents]);
    }

    public function showPatientForm(): View | Factory
    {
        return view('createPatient');
    }

    public function createPatient(Request $request)
    {
        Patient::create($request->all());

        return redirect()->route('patients.show');
    }
}
