<?php

use App\Http\Controllers\IncidentController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PatientsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'showIndex']);

Route::get('/patients', [PatientsController::class, 'showPatients']);
Route::get('/patient/{id}', [PatientsController::class, 'showPatientDetails']);
Route::get('/patient/create', [PatientsController::class, 'showPatientForm']);
Route::post('/patients', [PatientsController::class, 'createPatient']);

