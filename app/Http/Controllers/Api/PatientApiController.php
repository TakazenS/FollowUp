<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\JsonResponse;

class PatientApiController extends Controller
{
    public function getPatients(): JsonResponse
    {
        $patients = Patient::all();
        return response()->json($patients);
    }
}
