<?php

use App\Http\Controllers\DesaController;
use App\Http\Controllers\JenisPerusahaanController;
use App\Http\Controllers\KBLIController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\ModalController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\ProyekController;
use App\Http\Controllers\ResikoController;
use App\Http\Controllers\SkalaUsahaController;
use App\Models\SkalaUsaha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/desas', [DesaController::class, 'index']);
Route::post('/desas', [DesaController::class, 'store']);
Route::patch('/desas/{id}', [DesaController::class, 'update']);
Route::delete('/desas/{id}', [DesaController::class, 'delete']);

Route::get('/jenisperusahaan', [JenisPerusahaanController::class, 'index']);
Route::post('/jenisperusahaan', [JenisPerusahaanController::class, 'store']);
Route::patch('/jenisperusahaan/{id}', [JenisPerusahaanController::class, 'update']);
Route::delete('/jenisperusahaan/{id}', [JenisPerusahaanController::class, 'delete']);

Route::get('/kbli', [KBLIController::class, 'index']);
Route::post('/kbli', [KBLIController::class, 'store']);
Route::patch('/kbli/{id}', [KBLIController::class, 'update']);
Route::delete('/kbli/{id}', [KBLIController::class, 'delete']);

Route::get('/kecamatan', [KecamatanController::class, 'index']);
Route::post('/kecamatan', [KecamatanController::class, 'store']);
Route::patch('/kecamatan/{id}', [KecamatanController::class, 'update']);
Route::delete('/kecamatan/{id}', [KecamatanController::class, 'delete']);

Route::get('/modal', [ModalController::class, 'index']);
Route::post('/modal', [ModalController::class, 'store']);
Route::patch('/modal/{id}', [ModalController::class, 'update']);
Route::delete('/modal/{id}', [ModalController::class, 'delete']);

Route::get('/perusahaan', [PerusahaanController::class, 'index']);
Route::post('/perusahaan', [PerusahaanController::class, 'store']);
Route::patch('/perusahaan/{id}', [PerusahaanController::class, 'update']);
Route::delete('/perusahaan/{id}', [PerusahaanController::class, 'delete']);

Route::get('/proyek', [ProyekController::class, 'index']);
Route::post('/proyek', [ProyekController::class, 'store']);
Route::patch('/proyek/{id}', [ProyekController::class, 'update']);
Route::delete('/proyek/{id}', [ProyekController::class, 'delete']);

Route::get('/resiko', [ResikoController::class, 'index']);
Route::post('/resiko', [ResikoController::class, 'store']);
Route::patch('/resiko/{id}', [ResikoController::class, 'update']);
Route::delete('/resiko/{id}', [ResikoController::class, 'delete']);

Route::get('/skalausaha', [SkalaUsahaController::class, 'index']);
Route::post('/skalausaha', [SkalaUsahaController::class, 'store']);
Route::patch('/skalausaha/{id}', [SkalaUsahaController::class, 'update']);
Route::delete('/skalausaha/{id}', [SkalaUsahaController::class, 'delete']);
