<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/logout', function () {
    return view('welcome');
});

Route::get('/mode', function () {
    return view('mode');
});

Route::get('/หลักการวางทิศตามศาสตร์ฮวงจุ้ย', function () {
    return view('content02');
});

Route::get('/สีในเชิงฮวงจุ้ยศาสตร์', function () {
    return view('content03');
});
Route::get('/ฮวงจุ้ยการสร้างบ้าน', function () {
    return view('content04');
});

//Route::get('/chat', function () {
//    return view('home');
//});


Route::get('/birth_data/content/bedroom', function () {
    return view('detailcontent_bedroom');
});
Route::get('/birth_data/content/livingroom', function () {
    return view('detailcontent_livingroom');
});





Auth::routes();

Route::group(['middleware'=>['web']],function (){
    Route::get('/usercontract','TodosController@index');
    Route::get('/search', 'AutocompleteController@search');
    Route::post('/fetch', 'AutocompleteController@fetch')->name('search.fetch');

    Route::resource('todo','TodosController');
    Route::resource('todo','replyController');
    Route::resource('member','Member1Controller');


//    Route::get('/todo/create', 'replyController@create');
//    Route::get('/todo/create', 'replyController@store');
    Route::get('/sendemail', 'SendEmailController@index');
    Route::post('/sendemail/send', 'SendEmailController@send');
    Route::get('/element', 'DetailController@index')->name('element');
    Route::get('/home', 'findelementController@index');




    Route::prefix('partner')->group(function (){
        Route::get('/login', 'Auth\PartnerLoginController@showLoginForm')->name('partner.login');
        Route::post('/login', 'Auth\PartnerLoginController@login')->name('partner.login.submit');
        Route::get('/register', 'Auth\PartnerRegisterController@showRegisterForm')->name('partner.register');
        Route::post('/registers', 'Auth\PartnerRegisterController@register')->name('partner.register.submit');
    });


//    Route::get('/search', 'HomeController@search')->name('search');

    Route::post('/agerange', 'findelementController@getAge')->name('age.range');
    Route::get('/birthcalculate', 'findelementController@search');
    Route::post('/fetch', 'findelementController@fetch')->name('date.fetch');
    Route::get('/fengshuishow_data', 'findelementController@show');
    Route::resource('birth_data','findelementController');
    Route::get('/birth_data/{id}/{age}', 'findelementController@show');
    //*****************************************

    Route::get('/test', 'jointable@show');
    Route::get('/userprofile', 'UserController@profile');
    Route::post('/userprofile','UserController@updateAvatar');
    Route::get('/partnerprofile', 'PartnerController@profile');
    Route::post('/partnerprofile','PartnerController@updateAvatar');


    Route::get('/post/create', 'PostController@create')->name('post.create');
    Route::post('/post/store', 'PostController@store')->name('post.store');

    Route::get('/partials', 'PostController@index')->name('partials');
    Route::get('/post/show/{id}', 'PostController@show')->name('post.show');

    Route::post('/comment/store', 'CommentController@store')->name('comment.add');
    Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');

    Route::get('/chat', 'MessageController@index')->name('chat');
    Route::get('/message/{id}', 'MessageController@getMessage')->name('message');
    Route::post('message', 'MessageController@sendMessage');

    Route::resource('partner_contact','ContactPartnerController');
    Route::get('/contact_list_foruser', 'ContactPartnerController@contact_list_foruser');

    Route::get('/user_contact', 'ContactUserController@index');
    Route::get('/user_contact/{id}', 'ContactUserController@edit');
    Route::post('/user_contact/{id}','ContactUserController@update');




});




