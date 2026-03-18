<?php

use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ActivityController;

Route::resource('subjects', SubjectController::class);

Route::post('/activities', [ActivityController::class, 'store'])->name('activities.store');
Route::put('/activities/{activity}', [ActivityController::class, 'update'])->name('activities.update');
Route::delete('/activities/{activity}', [ActivityController::class, 'destroy'])->name('activities.destroy');
