<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function showPatients() {
        $patients = Patients::all();

        return view('patients', compact('patients'));
    }
}
