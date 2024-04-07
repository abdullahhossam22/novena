<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowPagesController;
use App\Http\Controllers\PostPagesController;

//___________________________ Show Routes ________________________//

Route::get('/', [ShowPagesController::class,'ShowHome'])->name('home.index');

Route::get('/about', [ShowPagesController::class,'ShowAbout'])->name('about.index');

Route::get('/service', [ShowPagesController::class,'ShowService'])->name('service.index');

Route::get('/department', [ShowPagesController::class,'ShowDepartments'])->name('department.index');

Route::get('/confirmation', [ShowPagesController::class,'ShowConfirmation'])->name('confirmation.index');



Route::get('/appoinment/create', [ShowPagesController::class,'ShowAppoinment'])->name('appoinment.create');

Route::get('/contact/create', [ShowPagesController::class,'ShowContact'])->name('contact.create');

//___________________________ Post Routes ________________________//

Route::post('/contact', [PostPagesController::class,'StoreContact'])->name('contact.store');

Route::post('/appointment', [PostPagesController::class,'StoreAppointment'])->name('appointment.store');

Route::get('/confirmationAPP', [ShowPagesController::class,'ShowConfirmationAPP'])->name('confirmationAPP.index');

//___________________________ Show Routes ________________________//

Route::get('/department/{department}', [ShowPagesController::class,'ShowSingleDepartment'])->name('SingleDepartment.show');
