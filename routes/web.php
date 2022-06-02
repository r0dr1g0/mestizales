<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/prueba', function () {
    return view('prueba');
});
// Route::get('/prueba', 'InventarioInsumoController@index')->name('prueba.index');

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin')->middleware('auth');

// Route::group(['middleware' => 'auth', 'prefix'=>'admin','namespace'=>'Admin'], function () {
    // REPORTE FECHAS
    Route::get('/producto/reporteFecha', [App\Http\Controllers\ProductoController::class, 'reporteFecha'])->name('producto.reporteFecha');

Route::group(
    [
    'middleware' => 'auth',
    'prefix'=>'admin'
    ], function () {

    Route::resource('persona', 'App\Http\Controllers\PersonaController');
    Route::get('persona/{id}/destroy',[
    'uses'  =>  'App\Http\Controllers\PersonaController@destroy',
    'as'    =>  'persona.destroy'
    ]);

    Route::resource('catProducto', 'App\Http\Controllers\CatProductoController');
    Route::get('catProducto/{id}/destroy',[
        'uses'  =>  'App\Http\Controllers\catProductoController@destroy',
        'as'    =>  'catProducto.destroy'
    ]);

    Route::resource('clasProducto', App\Http\Controllers\ClasProductoController::class);
    Route::get('clasProducto/{id}/destroy',[
        'uses'  =>  'App\Http\Controllers\clasProductoController@destroy',
        'as'    =>  'clasProducto.destroy'
    ]);

    Route::get('producto/export', [App\Http\Controllers\ProductoController::class, 'export'])->name('producto.export');
    Route::resource('producto', App\Http\Controllers\ProductoController::class);
    Route::get('producto/{id}/destroy',[
        'uses'  =>  'App\Http\Controllers\ProductoController@destroy',
        'as'    =>  'producto.destroy'
    ]);


    Route::resource('tipomedida', App\Http\Controllers\tipoMedidaController::class);
    Route::get('tipoMedida/{id}/destroy',[
        'uses'  =>  'App\Http\Controllers\tipoMedidaController@destroy',
        'as'    =>  'tipomedida.destroy'
    ]);

     Route::resource('proveedor', App\Http\Controllers\ProveedorController::class);
    Route::get('proveedor/{id}/destroy',[
        'uses'  =>  'App\Http\Controllers\ProveedorController@destroy',
        'as'    =>  'proveedor.destroy'
    ]);

    Route::resource('categoriainsumo', App\Http\Controllers\categoriaInsumoController::class);
    Route::get('categoriainsumo/{id}/destroy',[
        'uses'  =>  'App\Http\Controllers\categoriaInsumoController@destroy',
        'as'    =>  'categoriainsumo.destroy'
    ]);

    Route::resource('insumo', App\Http\Controllers\InsumoController::class);
    // Route::resource('admin/insumo', 'App\Http\Controllers\InsumoController');
    Route::get('insumo/{id}/destroy',[
        'uses'  =>  'App\Http\Controllers\InsumoController@destroy',
        'as'    =>  'insumo.destroy'
    ]);
    Route::resource('cliente', App\Http\Controllers\ClienteController::class);
    // Route::resource('admin/insumo', 'App\Http\Controllers\InsumoController');
    Route::get('cliente/{id}/destroy',[
        'uses'  =>  'App\Http\Controllers\ClienteController@destroy',
        'as'    =>  'cliente.destroy'
    ]);
    // Route::resource('permissions', 'App\Http\Controllers\PermissionController');
    Route::resource('permissions', App\Http\Controllers\PermissionController::class);

    // SECCION DE REPORTES ------------------------------------------------------------------------------------
    Route::get('reportes/users', [App\Http\Controllers\ReporteController::class, 'users'])->name('reportes.users');
    Route::get('reportes/productos', [App\Http\Controllers\ReporteController::class, 'productos'])->name('reportes.productos');
    Route::get('reportes/insumos', [App\Http\Controllers\ReporteController::class, 'insumos'])->name('reportes.insumos');
    Route::get('reportes/clientes', [App\Http\Controllers\ReporteController::class, 'clientes'])->name('reportes.clientes');
    // Route::group(['prefix'=>'reportes', 'namespace' => 'Reportes'], function () {
        // Route::get('reportes/users', [App\Http\Controllers\ReporteController::class, 'users'])->name('reportes.users');
        // Route::get('reportes', [App\Http\Controllers\ReporteController::class, 'productos'])->name('reportes.productos');
        // });

    // SECCION DE USUARIOS ------------------------------------------------------------------------------------
    Route::get('users/create', [App\Http\Controllers\UserController::class, 'create']);
    Route::post('users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
    Route::get('users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('users/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
    Route::get('users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
    Route::put('users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
    Route::get('users/{id}/destroy',[
        'uses'  =>  'App\Http\Controllers\UserController@destroy',
        'as'    =>  'users.destroy'
    ]);
    // FIN  SECCION DE USUARIOS

});

    // SECCION DE PERMISOS O PRIVILEGIOS ------------------------------------------------------------------------------------
    Route::resource('permissions', App\Http\Controllers\PermissionController::class);
    Route::get('permissions/{id}/destroy',[
        'uses'  =>  'App\Http\Controllers\PermissionController@destroy',
        'as'    =>  'permissions.destroy'
    ]);
    // FIN SECCION DE PERMISOS O PRIVILEGIOS

        // SECCION DE ROLES ------------------------------------------------------------------------------------------------------------------
        Route::resource('roles', App\Http\Controllers\RoleController::class);
        Route::get('roles/{id}/destroy',[
            'uses'  =>  'App\Http\Controllers\RoleController@destroy',
            'as'    =>  'roles.destroy'
        ]);
        // FIN SECCION DE ROLES


