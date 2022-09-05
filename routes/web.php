<?php
/*Copyright (C) 2022 Prof Matias Garcia para -http://www.profmatiasgarcia.com.ar- con licencia GNU GPL3.
Este programa es software libre. Puede redistribuirlo y/o modificarlo bajo los términos de la Licencia Pública General de GNU según es publicada por la Free Software Foundation, bien con la versión 3 de dicha Licencia o bien (según su elección) con cualquier versión posterior. Este programa se distribuye con la esperanza de que sea útil, pero SIN NINGUNA GARANTÍA, incluso sin la garantía MERCANTIL implícita o sin garantizar la CONVENIENCIA PARA UN PROPÓSITO PARTICULAR. Véase la Licencia Pública General de GNU para más detalles.
Debería haber recibido una copia de la Licencia Pública General junto con este programa. Si no ha sido así ingrese a -http://www.gnu.org/licenses/ -*/
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UbicacionController;

Route::view('/', 'welcome');

Route::view('home', 'home')->name('home');

Route::post('login',[LoginController::class, 'ingreso'])->name('login');

//Route::post('login',[LoginController::class, 'ingreso'])->middleware('es_mayor_de_edad')->name('login');

Route::view('nologin', 'noingresa');

Route::view('localizacion', 'localizacion')->name('localizacion');

Route::get('lang/{locale}', [UbicacionController::class, 'index']);
