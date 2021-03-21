<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;
use App\Http\controllers\DatatablesController;
use App\Http\controllers\fromController;

use App\Http\controllers\backend\othersController;
use App\Http\controllers\backend\deedController;
use App\Http\controllers\frontend\imageSetupController;
use App\Http\controllers\frontend\websiteController;
use App\Http\controllers\frontend\landController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [websiteController::class, 'index'])->name('website');

Route::middleware([Authenticate::class])->group(
    function () {




Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('route', function () {
    return view('welcom');
});

 Route::get('/datatable', [DatatablesController::class, 'anyData'])->name('datatables.data');
 Route::get('/datatabless', [DatatablesController::class, 'getIndex'])->name('datatables');
 Route::get('/user-data', [DatatablesController::class, 'test'])->name('user-data');


 



 Route::get('/btable', [fromController::class, 'botable'])->name('btable');
 Route::get('/delete/{id}', [fromController::class, 'delete'])->name('delete');
 Route::get('/edit/{id}', [fromController::class, 'edit'])->name('edit');


Route::post('/otherstore', [othersController::class, 'store'])->name('othersStore');

        Route::prefix('profiles')->group(function () {
            Route::get('/table', [fromController::class, 'botable'])->name('table');
            Route::get('/from', [fromController::class, 'index'])->name('from');
            Route::post('/store', [fromController::class, 'store'])->name('store');
            Route::post('/update/{id}', [fromController::class, 'update'])->name('update');
            Route::post('/teststore', [fromController::class, 'testll'])->name('teststore');
            Route::get('/test', [fromController::class, 'test'])->name('test');
            Route::get('/others', [fromController::class, 'othersview'])->name('others');
           



            Route::get('/others/view', [othersController::class, 'index'])->name('others.view');
            Route::get('/other/delete/{id}', [othersController::class, 'delete'])->name('other.delete');


            Route::post('/deed/store', [deedController::class, 'store'])->name('deed.store');
            Route::get('/deeds/view', [deedController::class, 'index'])->name('deeds.view');
            Route::get('/deeds/delete/{id}', [deedController::class, 'delete'])->name('deed.delete');
            Route::get('/deedAdd', [fromController::class, 'deedAdd'])->name('deedAdd');


            
        });

        Route::prefix('website')->group(function () {

            Route::get('/setup', [imageSetupController::class, 'index'])->name('imageSetup');
            Route::post('/setup/store', [imageSetupController::class, 'store'])->name('setup.store');

            Route::get('/land/view', [landController::class, 'index'])->name('land.view');
            Route::get('/land/add', [landController::class, 'add'])->name('land.add');
            Route::post('project/store', [landController::class, 'store'])->name('project.store');
            Route::get('project/edit/{id}', [landController::class, 'edit'])->name('project.edit');
            Route::get('project/delete/{id}', [landController::class, 'delete'])->name('project.delete');
            Route::post('project/update/{id}', [landController::class, 'update'])->name('project.update');



        });


        


});

