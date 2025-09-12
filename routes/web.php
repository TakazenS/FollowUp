<?php

use App\Http\Controllers\PatientsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PatientsController::class, 'index']);

Route::get('/patients', [PatientsController::class, 'showPatients']);
