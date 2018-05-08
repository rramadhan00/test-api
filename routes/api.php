<?php

use Illuminate\Http\Request;
use App\anjing;

Route::get('all', function() {

    return anjing::all();

});

Route::get('all/{id}', function(anjing $id) {

    return $id;

});

Route::post('all', function() {

    return anjing::create(request()->all());

});

Route::delete('all/{id}', function(anjing $id){

    $id->delete();
    return 'Sukses menghapus data';

});