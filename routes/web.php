<?php

use app\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get("/", [SiteController::class, "index"])-> name('home');
Route::get("/faq", [SiteController::class, "faq"])-> name('faq');
Route::get("/sobre-nos", [SiteController::class, "sobreNos"])-> name('sobre-nos');
Route::get("/noticias-e-atualizacoes", [SiteController::class, "nt"])-> name('nt');
Route::get("/politica-de-privacidade", [SiteController::class, "pdp"])-> name('pdp');
