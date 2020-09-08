<?php

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

Route::bind('product', function($slug){
    return App\Product::where('slug', $slug)->first();
});

//Category dependency injection
Route::bind('category', function($category){
    return App\Category::find($category);
});

//Users dependency injection
Route::bind('user', function($user){
    return App\User::find($user);
});

Route::get('/', [
    'as' =>'home',
    'uses' => 'PrincipalController@index'
]);

Route::get('/store', [
    'as' =>'store',
    'uses' => 'StoreController@index'
]);

Route::get('/tienda', [
    'as' =>'tienda',
    'uses' => 'StoreController@tienda'
]);

Route::get('/all', [
    'as' =>'all-products',
    'uses' => 'AllController@index'
]);

Route::post('all/fetch', 'AllController@fetch')->name('autocomplete-fetch');



Route::get('product/{slug}', [
    'as' => 'product-detail',
    'uses' => 'StoreController@show'
]);


// Para contacto en Formulario

Route::get('/contacto-farmacia-herrera', [
    'as' => 'contactanos',
    'uses' => 'ContactUsController@contactUs'
]);

Route::post('contact-us',['as'=>'contactus.store', 'uses'=>'ContactUSController@contactUSPost'] );

Route::get('test', function()
{
    dd(Config::get('mail'));
});

// Ruta de  Pagina en Construccion

Route::get('/construccion', [
    'as' => 'sitio-construccion',
    'uses' => 'SitioConstruccionController@index'
]);



// Carrito --------

Route::get('cart/show', [
    'as' => 'cart-show',
    'uses' => 'CartController@show'
]);

Route::get('cart/add/{product}', [
    'as' => 'cart-add',
    'uses' => 'CartController@add'
]);

Route::get('cart/delete/{product}', [
    'as' => 'cart-delete',
    'uses' => 'CartController@delete'
]);

Route::get('cart/trash', [
    'as' => 'cart-trash',
    'uses' => 'CartController@trash'
]);

Route::get('cart/update/{product}/{quantity?}', [
    'as' => 'cart-update',
    'uses' => 'CartController@update'
]);

Route::get('order-detail', [
    'middleware' => 'auth',
    'as' => 'order-detail',
    'uses' => 'CartController@orderDetail'
]);


// Authentication routes...

Auth::routes();

Route::get('auth/login', 'HomeController@index')->name('login-get');

Route::post('auth/login', 'HomeController@index')->name('login-post');


Auth::routes();

Route::get('auth/register', 'HomeController@index')->name('register-get');


//Enviamos Nuestro pedido a Paypal

Route::get('payment', array(
    'as' => 'payment',
    'uses' => 'PaypalController@postPayment',
));

// Paypal redirecciona a esta Ruta

Route::get('payment/status', array(
    'as' => 'payment.status',
    'uses' => 'PaypalController@getPaymentStatus',
));


// Esta ruta es de pruebas

Route::get('/prueba', [
    'as' =>'pruebas',
    'uses' => 'PruebasController@index'
]);


// Muestra Productos de Avene

Route::get('/avene', [
    'as' =>'productos-avene',
    'uses' => 'DermatologiaController@avene'
]);

Route::get('/larocheposay', [
    'as' =>'productos-laroche',
    'uses' => 'DermatologiaController@roche'
]);

Route::get('/vichy', [
    'as' =>'productos-vichy',
    'uses' => 'DermatologiaController@vichy'
]);

Route::get('/isdin', [
    'as' =>'productos-isdin',
    'uses' => 'DermatologiaController@isdin'
]);

Route::get('/patente', [
    'as' =>'productos-patente',
    'uses' => 'DermatologiaController@patente'
]);

Route::get('/genericos', [
    'as' =>'productos-genericos',
    'uses' => 'DermatologiaController@genericos'
]);

Route::get('/otc', [
    'as' =>'productos-otc',
    'uses' => 'DermatologiaController@otc'
]);

// CREACION DE RUTAS PARA LAS KEYWORDS O SECCIONES

Route::get('/la-historia-de-farmacia-herrera', [
    'as' =>'historia',
    'uses' => 'NuestraHistoriaController@index'
]);

Route::get('/aliados-comerciales', [
    'as' =>'aliados-comerciales',
    'uses' => 'AliadosComercialesController@index'
]);

Route::get('/apoyo-al-deporte', [
    'as' =>'apoyodeporte',
    'uses' => 'ApoyoDeporteController@index'
]);

Route::get('/tips-herrera', [
    'as' =>'tips',
    'uses' => 'TipsController@index'
]);


// Trabajar con Router de Nuestro Panel ADMIN y Agruparlos

Route::group(['namespace' => 'Admin', 'middleware' => ['auth'], 'prefix' => 'admin'], function ()
{
    Route::get('home', function (){
        return view('admin/home');
    });

    Route::resource('category', 'CategoryController');

    Route::resource('product',   'ProductController');

    Route::resource('user',     'UserController');




    Route::get('orders', [
        'as' => 'admin.order.index',
        'uses' => 'OrderController@index'
    ]);

    Route::post('order/get-items', [
        'as' => 'admin.order.getItems',
        'uses' => 'OrderController@getItems'
    ]);

    Route::get('order/{id}', [
        'as' => 'admin.order.destroy',
        'uses' => 'OrderController@destroy'
    ]);


});






