<?php

Route :: post ( 'create ' , function ( \ Illuminate \ Http \ Request $request ,\ Illuminate \ Validation \ Factory $validator ) {
$validation = $validator -> make ( $request -> all () , [
'title' => 'required | min :5 ',
'content ' => ' required | min :10 '
]);
if ( $validation -> fails ()) {
return redirect () -> back () -> withErrors ( $validation );
}
return redirect ()
-> route ( 'admin . index ')
-> with ( ' info ' , ' Post created , Title : ' . $request -> input ( 'title' ));
}) -> name ( 'admin . create ');

Route::get('/post/{id}', function () {
    return view('blog.index');
})->name('post.id');

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin.index');

Route::get('/admin/create', function () {
    return view('admin.create');
})->name('create'); 

Route::get('/admin/edit/{id}', function () {
    return view('admin.edit');
}) ;

Route::get('/about', function () {
    return view('other.about');
})->name('about') ;


Route::group (['prefix' => 'admin'] , function () {
Route::get ( '/', [
' uses ' => ' PostController@getAdminIndex ',
'as ' => ' admin.index '
]);


Route::get ('create', [
' uses ' => ' PostController@getAdminCreate ',
'as' => 'admin.create'
]);

Route:: post ('create', [
' uses ' => ' PostController@postAdminCreate ' ,
'as ' => ' admin.create '
]);
Route:: get ('edit /{ id }', [
' uses ' => ' PostController@getAdminEdit ',
'as ' => ' admin.edit '
]);
Route:: post('edit', [' uses ' => ' PostController@postAdminUpdate ' ,
'as ' => ' admin.update '
]);
});


Route:: get( '/', [
' uses ' => ' PostController@getIndex ',
'as ' => 'blog.index'
]);
Route:: get ( ' post /{ id } ', [
' uses ' => ' PostController@getPost ',
'as ' => 'blog.post '
]);