<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\View\View;
use Illuminate\View\Factory;

class PatientsController extends Controller
{

    public function showPatients(): View | Factory {
        $patients = Patient::all();

        return view('patients', compact('patients'));
    }

    public function createPatient(): View | Factory {
        return view('createPatient');
    }

}
