<?php

use Illuminate\Support\Facades\Route;

Route::get('/', '\App\Http\Controllers\TugasPraktikum4Controller@tugas_praktikum_4')->name('tugas.praktikum_4');
Route::get('export-excel', '\App\Http\Controllers\TugasPraktikum4Controller@export_excel')->name('tugas.export_excel');
Route::post('import-excel', '\App\Http\Controllers\TugasPraktikum4Controller@import_excel')->name('tugas.import_excel');;