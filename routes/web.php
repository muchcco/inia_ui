<?php


Route::get('/', 'PagesController@index')->name('welcome');


//ingreso de estaciones
Route::get('estacion', 'PagesController@estacion')->name('estacion.index');
Route::get('estacion/tabla', 'PagesController@tabla')->name('estacion.tabla');
Route::get('estacion/prueba', 'PagesController@prueba')->name('estacion.prueba');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth']], function () {

    Route::get('intranet', 'IntranetController@index')->name('intranet.index');

    Route::group(['prefix'=>'intranet','as'=>'intranet.'],function () {

      Route::get('articulo', 'ArticuloController@index')->name('articulo.index');
      Route::get('articulo/create', 'ArticuloController@create')->name('articulo.create');
      Route::get('articulo/subtipos', 'ArticuloController@subtipos')->name('articulo.subtipos');
      Route::post('articulo/store', 'ArticuloController@store')->name('articulo.store');
        
    });

    Route::group(['prefix'=>'intranet','as'=>'intranet.'],function () {

      //COMBO CATALOGO

      Route::get('catalogo', 'CatalogoController@index')->name('catalogo.index');
      Route::get('catalogo/create', 'CatalogoController@create')->name('catalogo.create');
      Route::get('catalogo/subtipos', 'CatalogoController@subtipos')->name('catalogo.subtipos');
      Route::post('catalogo/store', 'CatalogoController@store')->name('catalogo.store');

      Route::group(['prefix'=>'catalogo','as'=>'catalogo.'],function () {
        Route::get('servicio', 'ServicioController@index')->name('servicio.index');
        Route::post('servicio/store', 'ServicioController@store')->name('servicio.store');
      });

      Route::group(['prefix'=>'catalogo','as'=>'catalogo.'],function () {
        Route::get('analisis', 'AnalisisController@index')->name('analisis.index');
        Route::get('analisis/modal/create', 'AnalisisController@create')->name('analisis.modal.create');
        Route::post('analisis/store', 'AnalisisController@store')->name('analisis.store');
      });

      // FIN COMBO CATALOGO

      //COMBO ALMACEN
      Route::get('almacen', 'AlmacenController@index')->name('almacen.index');
      Route::get('almacen/create', 'AlmacenController@create')->name('almacen.create');
      Route::get('almacen/subtipos', 'AlmacenController@subtipos')->name('almacen.subtipos');
      Route::get('almacen/subtiposca', 'AlmacenController@subtiposca')->name('almacen.subtiposca');
      Route::post('almacen/store', 'AlmacenController@store')->name('almacen.store');
      Route::get('almacen/{id}/edit', 'AlmacenController@edit')->name('almacen.edit');
      Route::put('almacen/{id}', 'AlmacenController@update')->name('almacen.update');

      //FIN COMBO ALMACEN

      //COMBO PROVEEDOR
      Route::get('proveedor', 'ProveedorController@index')->name('proveedor.index');
      Route::get('proveedor/tabla', 'ProveedorController@tabla')->name('proveedor.tabla');
      Route::get('proveedor/create', 'ProveedorController@create')->name('proveedor.create');
      Route::get('proveedor/buscar', 'ProveedorController@buscar')->name('proveedor.buscar');
      //FIN COMBO PROVEEDOR
        
      //COMBO INGRESO

      Route::get('ingreso', 'IngresoController@index')->name('ingreso.index');
      Route::get('ingreso/create', 'IngresoController@create')->name('ingreso.create');
      Route::get('ingreso/subtipos', 'IngresoController@subtipos')->name('ingreso.subtipos');
      Route::get('ingreso/subtiposca', 'IngresoController@subtiposca')->name('ingreso.subtiposca');
      Route::post('ingreso/store', 'IngresoController@store')->name('ingreso.store');
      Route::get('ingreso/{id}/edit', 'IngresoController@edit')->name('ingreso.edit');
      Route::put('ingreso/{id}', 'IngresoController@update')->name('ingreso.update');
      //FIN COMBO INGRESO

      //COMBO INGRESO

      Route::get('reporte', 'ReporteController@index')->name('reporte.index');
      Route::get('reporte/prueba', 'ReporteController@prueba')->name('reporte.prueba');
      //FIN COMBO INGRESO

      //COMBO USUARIOS

      Route::get('usuarios', 'UsuariosController@index')->name('usuarios.index');
      Route::get('usuarios/listar', 'UsuariosController@listar')->name('usuarios.listar');
      Route::get('usuarios/prueba', 'UsuariosController@prueba')->name('usuarios.prueba');
      Route::get('usuarios/modal/create', 'UsuariosController@create')->name('usuarios.modal.create');
      Route::post('usuarios/store', 'UsuariosController@store')->name('usuarios.store');
      //FIN COMBO USUARIOS

      //COMBO USUARIO
    
      Route::get('user', 'PerfilController@index')->name('user.index');
      Route::post('user/store', 'PerfilController@store')->name(('user.store'));
      Route::post('user/password', 'PerfilController@password')->name(('user.password'));


      //FIN COMBO USUARIO

      //COMBO SEDE
    
      Route::get('sede', 'SedeController@index')->name('sede.index');
      Route::get('sede/{id}/edit', 'SedeController@edit')->name('sede.edit');
      Route::put('sede/{id}', 'SedeController@image')->name('sede.image');
      //FIN COMBO SEDE

    });    


});