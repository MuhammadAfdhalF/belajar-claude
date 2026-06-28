<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'home']);
Route::get('/projects/{slug}', [PortfolioController::class, 'show'])->name('projects.show');
