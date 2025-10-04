<?php

namespace App\Http\Controllers;

use App\Models\Incident;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\View\Factory;

class PatientsController extends Controller
{

    public function showPatients(): View | Factory
    {
        $patients = Patient::all();

        return view('patients', compact('patients'));
    }

    public function showPatientDetails($id): View
    {
        $patient = Patient::with(['incidents' => function ($query) {
            $query->orderBy('created_at', 'desc');
        }])->findOrFail($id);

        $incidents = $patient->incidents;

        return view('patientDetails', compact('patient', 'incidents'));
    }

    public function showPatientForm(): View | Factory
    {
        return view('createPatient');
    }

    public function createPatient(Request $request)
    {
        Patient::create($request->all());

        return redirect('/patients');
    }

}
