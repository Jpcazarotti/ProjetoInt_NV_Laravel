<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get("/", [SiteController::class, "index"])-> name('home');
Route::get("/faq", [SiteController::class, "faq"])-> name('faq');
Route::get("/sobre-nos", [SiteController::class, "sobreNos"])-> name('sobre-nos');
Route::get("/noticias-e-atualizacoes", [SiteController::class, "nt"])-> name('nt');
Route::get("/politica-de-privacidade", [SiteController::class, "pdp"])-> name('pdp');
Route::get("/login", [SiteController::class, "login"])-> name('login');
Route::get("/cadastro", [SiteController::class, "cadastro"])-> name('cadastro');
Route::get("/recuperacao-de-senha", [SiteController::class, "recuperarSenha"])-> name('recu_senha');
