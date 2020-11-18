<?php  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Owners;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(["prefix"=>"owners"], function(){
    Route::get('', [Owners::class, 'index']);
        Route::group(["prefix"=>"{owner}"], function(){
            Route::get('', [Owners::class, 'show']);
            Route::delete('', [Owners::class, 'destroy']);
            Route::post('', [Owners::class, "store"]);
            Route::put('', [Owners::class, "update"]);
        });
});




//index as we want to get everything, will respond to GET /api/owners, so http://homestead.test/api/owners

// Updating an existing owner based on their ID

// {   
//     "first_name" : "test",
//     "last_name" : "test",
//     "telephone" :  "test",
//     "email" : "test@test.com",
//     "address_1" : "test",
//     "address_2" :  "test",
//     "town" : "test",
//     "postcode" :  "test test"
// }