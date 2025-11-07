<?php

use App\Http\Controllers\Api\FreeTrialController;
use Illuminate\Support\Facades\Route;

Route::post('/free-trial', FreeTrialController::class);

