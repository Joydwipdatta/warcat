<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeptController;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Assign\Assigncontroller;
use App\Http\Controllers\Director\DirectorController;
use App\Http\Controllers\secretary\SecretaryController;

Route::get('/
', function () {
    return view('admin.index');
})->middleware(['auth', 'verified']);

Route::middleware(['auth',])->group(function () {

    Route::controller(Admincontroller::class)->group(function () {
        Route::get('/admin/logout', 'logout')->name('admin.logout');
        Route::get('/admin/profile', 'profile')->name('admin.profile');
        Route::get('/edit/profile', 'edit')->name('edit.profile');
        Route::post('/store/profile', 'StoreProfile')->name('store.profile');
    });
});

Route::middleware(['auth',])->group(
    function () {

        Route::controller(DirectorController::class)->group(
            function () {
                Route::get('/director', 'Director')->name('director');
                Route::post('/save/director', 'StoreDirector')->name('save.director');
                Route::get('/view', 'Assignedepartment')->name('view.director');
                Route::get('/assigned-department/{id}', 'viewdirectordata');
                Route::get('/delete/assigndept/{id}', 'deleteData');
                Route::get('/table', 'Table')->name('director.table');
            }
        );
    }
);
Route::middleware(['auth',])->group(
    function () {

        Route::controller(SecretaryController::class)->group(
            function () {
                Route::get('/secretary', 'Secretary')->name('secretary');
                Route::post('/save/secretary', 'StoreSecretary')->name('save.secretary');
                Route::get('/view-secretary', 'ViewTable')->name('view.Secretary');
                Route::get('/secretary-department/{id}', 'viewsecretarydata');
                Route::get('/delete/secretary-department/{id}', 'deleteData');
                Route::get('/view-table', 'SecTable')->name('name.sectable');
            }
        );
    }
);

Route::middleware(['auth',])->group(
    function () {

        Route::controller(DeptController::class)->group(
            function () {

                Route::get('/department', 'Department')->name('department');
                Route::post('/save/department', 'Storedepartment')->name('save.department');
                Route::get('/delete/department/{id}', 'Deletedept');
            }
        );
    }
);
Route::middleware(['auth',])->group(
    function () {

        Route::controller(Assigncontroller::class)->group(
            function () {

                Route::get('/assign', 'Assign')->name('assign');
                Route::post('/save/assign', 'Storeassign')->name('save.assign');
                Route::get('/assign-secretary', 'SecAssign')->name('secassign');
                Route::post('/save/secassign', 'Storesecassign')->name('save.secassign');
                // ====edit route====
                Route::get('/assign-director-department/{id}', 'Directorshow');
                Route::post('/update/director-department', 'updatedirecdept')->name('update.department');
                // ==========ASSIGN SECRETARY UPDATE==============
                Route::get('/assign-secretary-department/{id}', 'showsecdept');
                Route::post('/update-secreatary-department', 'updatesecdept')->name('update.secreatary.departement');
            }
        );
    }
);




Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
