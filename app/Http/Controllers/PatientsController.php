<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\View\Factory;

class PatientsController extends Controller
{

    public function showPatients(): View | Factory {
        $patients = Patient::all();

        return view('patients', compact('patients'));
    }

    public function showPatientDetails($id): View {
        $patient = DB::table('patients')
            ->select('*')
            ->where('patients.id', '=', '$id')
            ->get();

        return view('patientDetails', compact('patient'));
    }

    public function showPatientForm(): View | Factory {
        return view('createPatient');
    }

    public function createPatient(Request $request) {
        Patient::create($request->all());

        return redirect('/patients');
    }

}
