<?php

Route::get('/login',function(){
    return'Login';
})->name('login');

//os tres routes são para o admin aceder, o middleware não deixa o user normal aceder por isso pede o login.
//Route::middleware([])-> group (function() {
//prefix serve para todos terem os mesmo url inicial ou seja /admin/dashboard;/admin/financeiro; o que facilita se alguma dia tiver que mudar o nome.
  //  Route::prefix('admin')->group(function(){

    //    Route::namespace('Admin')->group(function(){
      //      Route::name('admin.')->group(function(){

        //        Route::get('/dashboard','TesteController@teste')-> name('dashboard');
            
          //      Route::get('/financeiro','TesteController@teste')->name('financeiro');

            //    Route::get('/produtos','TesteController@teste')->name('products');
                
              //  Route::get('/', function(){
                //    return redirect()->route('admin.dashboard');
               // })->name('home');
            // });
      //  });
   // });
        
//});


//one liner de todas as rotas abaixo
Route::resource('products', 'ProductController')->middleware([]);


// Route::delete('products/{id}', 'ProductController@destroy')->name('products.destroy');
// Route::put('products/{id}', 'ProductController@update')->name('products.update');
// Route::get('products/{id}/edit','ProductController@edit')->name('products.edit');
// Route::get('products/create', 'ProductController@create')->name('products.create');
// Route::get('products', 'ProductController@index')->name('products.show');
// Route::get('products/{id}', 'ProductController@show')->name('products.index');
// Route::post('products', 'ProductController@store')->name('products.store');


Route::group([
    'middleware'=>[],
    'prefix'=> 'admin',
    'namespace'=>'Admin',
], function(){
    Route::name('admin.')->group(function(){

        Route::get('/dashboard','TesteController@teste')-> name('dashboard');
                
        Route::get('/financeiro','TesteController@teste')->name('financeiro');

        Route::get('/produtos','TesteController@teste')->name('products');
        
        Route::get('/', function(){
            return redirect()->route('admin.dashboard');
        })->name('home');
    });
});


Route::get('/redirect3', function(){
    return redirect()->route('url.name');
});


Route::get('/nome-url', function(){
    return'hey hey hey';
})->name('url.name');


Route::view('view', 'site.welcome');


Route::redirect('/redirect1', '/redirect2');

//Route::get('/redirect1', function(){
 //   return redirect('/redirect2');
//});


Route::get('/redirect2', function(){
    return "Redirect 02";
});


//O ? é preciso para ir buscar qualquer tipo de produto mas para funcionar temos que dar um valor na função($idProduct='')
Route::get('/produtos/{idProduct?}', function($idProduct=''){
    return "Produto(s){$idProduct}";
});


//Neste caso a função tem que ter o mesmo nome que a flag
Route::get('/categoria/{flag}/posts', function($flag){
    return "Produtos da categoria:{$flag}";
});


//Neste caso a flag não tem que ter o mesmo nome que a função
Route::get('/categorias/{flag}', function($prm1){
    return "Produtos da categoria:{$prm1}";
});


Route::match(['Post','get'], '/match',function(){
    return 'match';
});


Route::any('/any', function(){
    return'any';
});


Route::post('/register', function(){
    return'';
});


Route::get('/empresa', function () {
    return 'Sobre a empresa';
});


Route::get('/contacto', function () {
    return view('site.contact');
});


Route::get('/', function () {
    return view('welcome');
});