<?php

use Illuminate\Support\Facades\Route;

Route::get("/", "HtmlController@home");
Route::get("about", "HtmlController@about");
Route::get("portfolio", "HtmlController@portfolio");
Route::get("features", "HtmlController@features");
Route::get("contact", "HtmlController@contact");