<?php

use App\Livewire\Ambientes\AmbienteCreate;
use App\Livewire\Ambientes\AmbienteEdit;
use App\Livewire\Ambientes\AmbienteIndex;
use App\Livewire\Dashboard\Dashboard;
use App\Livewire\Sensores\SensorCreate;
use App\Livewire\Sensores\SensorEdit;
use App\Livewire\Sensores\SensorIndex;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', Dashboard::class)->name('dashboard');

Route::get('ambiente/create', AmbienteCreate::class)->name('ambiente.create');
Route::get('ambiente/edit/{id}', AmbienteEdit::class)->name('ambiente.edit');
Route::get('ambiente', AmbienteIndex::class)->name('ambiente.index');

Route::get('sensor/create', SensorCreate::class)->name('sensor.create');
Route::get('sensor/edit/{id}', SensorEdit::class)->name('sensor.edit');
Route::get('sensor', SensorIndex::class)->name('sensor.index');