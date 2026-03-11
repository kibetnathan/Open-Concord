<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\GroupController;

Route::apiResource('members', MemberController::class);
Route::apiResource('groups', GroupController::class);