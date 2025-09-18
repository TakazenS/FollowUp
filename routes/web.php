<?php

use App\Http\Controllers\CreatePatientController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PatientsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'showIndex']);

Route::get('/patients', [PatientsController::class, 'showPatients']);

Route::post('/patients', [CreatePatientController::class, 'create']);

Route::get('/patient/create', [PatientsController::class, 'createPatient']);

