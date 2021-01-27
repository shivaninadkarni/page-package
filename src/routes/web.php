<?php

use IW\Page\Http\Controllers\PageController;

Route::get('admin/page', function () {
  return view('page::list');
});

Route::get('admin/page/manage', function () {
  return view('page::manage');
});

Route::post('admin/page/save', [PageController::class, 'save']);

Route::get('admin/greetings/{a}/{b}', [PageController::class, 'greetings']);
