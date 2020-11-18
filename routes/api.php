<?php  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Owners;
use App\Http\Controllers\API\Animals;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(["prefix"=>"owners"], function(){
    Route::get('', [Owners::class, 'index']);
    Route::post('', [Owners::class, "store"]);
        Route::group(["prefix"=>"{owner}"], function(){
            Route::get('', [Owners::class, 'show']);
            Route::delete('', [Owners::class, 'destroy']);
            Route::put('', [Owners::class, "update"]);

        Route::group(["prefix"=>"animals"], function(){
            Route::get('', [Animals::class, 'index']);
            Route::post('', [Animals::class, "store"]);

            Route::group(["prefix"=>"{animal}"], function(){
                Route::get('', [Animals::class, 'show']);
                Route::delete('', [Animals::class, 'destroy']);
                Route::put('', [Animals::class, "update"]);
            });
        });
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

// {
//     "id": 23,
//     "created_at": "2020-11-18T09:11:41.000000Z",
//     "updated_at": "2020-11-18T10:36:05.000000Z",
//     "name": "widgetness",
//     "date_of_birth": "2002-12-31",
//     "biteyness": "1",
//     "type": "dog",
//     "height": "0.60",
//     "weight": "26.00",
//     "owner_id": 2
// }