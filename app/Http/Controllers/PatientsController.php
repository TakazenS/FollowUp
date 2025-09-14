<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use Illuminate\View\View;
use Illuminate\View\Factory;

class PatientsController extends Controller
{
    public function index(): View | Factory {
        return view('welcome');
    }

    public function showPatients(): View | Factory {
        $patients = Patients::all();

        return view('patients', compact('patients'));
    }

}
