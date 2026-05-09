<?php

use App\Http\Controllers\Api\FreeTrialController;
use App\Http\Controllers\Api\FreeTrialInfoController;
use Illuminate\Support\Facades\Route;

Route::post('/free-trial', FreeTrialController::class);
Route::post('/get-quote', FreeTrialInfoController::class);

