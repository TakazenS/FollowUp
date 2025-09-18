<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use http\Env\Request;

class CreatePatientController extends Controller
{
    public function create(Request $request) {

        Patient::create($request);

        $patients = Patient::all();

        return redirect('/patients', compact('patients'));
    }
}
