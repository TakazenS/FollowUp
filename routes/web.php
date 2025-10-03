<?php

use App\Http\Controllers\IncidentController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PatientsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'showIndex'])->name('home');

Route::get('/patients', [PatientsController::class, 'showPatients'])->name('patients.show');
Route::get('/patient/create', [PatientsController::class, 'showPatientForm'])->name('patient.create');
Route::post('/patients', [PatientsController::class, 'createPatient'])->name('patient.form.post');
Route::get('/patient/details/{id}', [PatientsController::class, 'showPatientDetails'])->name('patient.details')
    ->where('id', '[0-9]+');

Route::get('/patient/incidents/create/{id}', [IncidentController::class, 'showIncidentForm'])->name('incident.create')
    ->where('id', '[0-9]+');
Route::post('/patient/details/{id}', [IncidentController::class, 'createIncident'])->name('incident.form.post')
    ->where('id', '[0-9]+');

