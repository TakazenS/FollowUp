<?php

use App\Http\Controllers\Api\PatientApiController;
use App\Http\Controllers\IncidentController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PatientsController;
use Illuminate\Support\Facades\Route;

// Basic
Route::get('/', [WelcomeController::class, 'showIndex'])
    ->name('home');

Route::get('/patients', [PatientsController::class, 'showPatients'])
    ->name('patients.show');

Route::get('/patient/create', [PatientsController::class, 'showPatientForm'])
    ->name('patient.create');

Route::post('/patients', [PatientsController::class, 'createPatient'])
    ->name('patient.form.post');

Route::get('/patient/details/{patient}', [PatientsController::class, 'showPatientDetails'])
    ->name('patient.details')
    ->whereNumber('patient');

Route::get('/patient/incidents/create/{patient}', [IncidentController::class, 'showIncidentForm'])
    ->name('incident.create')
    ->whereNumber('patient');

Route::post('/patient/details/{patient}', [IncidentController::class, 'createIncident'])
    ->name('incident.form.post')
    ->whereNumber('patient');

Route::delete('/patient/{patient}/incident/{incident}', [IncidentController::class, 'deleteIncident'])
    ->name('incident.delete')
    ->whereNumber('patient')
    ->whereNumber('incident');

// API
Route::get('/api/patients', [PatientApiController::class, 'getPatients']);
