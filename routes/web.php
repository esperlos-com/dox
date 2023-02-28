<?php

use Illuminate\Support\Facades\Route;



Route::get('login', ['as' => 'login', 'uses' => \App\Http\Livewire\Panel\Pages\Login::class]);



Route::group(
    [
        'namespace' => '\App\Http\Livewire\Panel\Pages',
        'middleware' => 'auth',
    ], function () {
    Route::get('dashboard', Dashboard::class)->name('dashboard');
    Route::get('language-management', Initials\LanguageManagement::class)->name('language-management');
    Route::get('version-management', Initials\VersionManagement::class)->name('version-management');
    Route::get('translate-management', Initials\TranslateManagement::class)->name('translate-management');
    Route::get('document-management/{id?}/{type?}', Documents\DocumentManagement::class)->name('document-management');
    Route::get('menu-management', Documents\MenuManagement::class)->name('menu-management');
    Route::get('media-management', Media\MediaManagement::class)->name('media-management');

});



Route::group(
    [
        'namespace' => '\App\Http\Livewire\Website\Pages',
    ], function () {


    Route::get('docs/{slug?}', DocumentHome::class)->name('docs');


});


