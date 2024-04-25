<?php

use App\Http\Controllers\NewsReleasesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('noticiasereleases', [NewsReleasesController::class, 'getNewsAndReleases']);
Route::get('noticias', [NewsReleasesController::class, 'getNews']);
Route::get('releases', [NewsReleasesController::class, 'getReleases']);
