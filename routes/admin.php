<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\PermissionController;



Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.page.dashboard');
    })->name('dashboard');

    Route::prefix('plan')->group(function () {
        Route::get('/', [PlanController::class, 'index'])->name('admin.plan');
        Route::get('create', [PlanController::class, 'create'])->name('admin.plan.create');
        Route::post('create', [PlanController::class, 'store']);       
        Route::delete('delete', [PlanController::class, 'destroy'])->name('admin.plan.delete');    
       
    });

    Route::middleware(['permission:create'])->prefix('user')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.user');
        Route::get('create', [AdminController::class, 'create'])->name('admin.user.create');
        Route::post('create', [AdminController::class, 'store']);  
        Route::get('edit/{id}', [AdminController::class, 'edit'])->name('admin.user.edit');
        Route::put('edit/{id}', [AdminController::class, 'update']);      
        Route::delete('delete', [AdminController::class, 'destroy'])->name('admin.user.delete');       
    
        Route::prefix('assign-permission')->group(function () {
            Route::get('add/{id}', [AdminController::class, 'add_user_permission'])->name('admin.user.assign_permission');
            Route::put('add/{id}', [AdminController::class, 'storeUserPermission']);  
        });
    });

    Route::prefix('role')->group(function () {
        Route::get('/', [RoleController::class, 'index'])->name('admin.role');
        Route::get('create', [RoleController::class, 'create'])->name('admin.role.create');
        Route::post('create', [RoleController::class, 'store']);       
        Route::delete('delete', [RoleController::class, 'destroy'])->name('admin.role.delete');    
       
    });

    Route::prefix('permission')->group(function () {
        Route::get('/', [PermissionController::class, 'index'])->name('admin.permission');
        Route::get('create', [PermissionController::class, 'create'])->name('admin.permission.create');
        Route::post('create', [PermissionController::class, 'store']);       
        Route::delete('delete', [PermissionController::class, 'destroy'])->name('admin.permission.delete');       
    });

    // Route::prefix('role-permission')->group(function () {
    //     Route::get('/', [PermissionController::class, 'index'])->name('admin.user.role_permission');
    //     Route::post('create', [PermissionController::class, 'create'])->name('admin.role_permission.create');
    //     Route::put('create', [PermissionController::class, 'store']);       
    //     Route::delete('delete', [PermissionController::class, 'destroy'])->name('admin.role_permission.delete');       
    // });
});
