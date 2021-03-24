<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\admin\AlbumsController;
use App\Http\Controllers\admin\FirstPageController;
use App\Http\Controllers\admin\AdminPostController;
use \App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\ScheduleController;
use App\Http\Controllers\ActivesController;
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

// Uncomment to explicitly set the routes.
//Auth::routes(['verify' => true, 'register' => false]);
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/showposts/{type}', 'PostController@ShowPost');
Route::get('/user/profile', 'UsersController@index');
Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts/create', 'PostController@create')->name('posts.create');
Route::post('/posts/store', 'PostController@store')->name('posts.store');
Route::get('/posts/show/{id}', 'PostController@show')->name('posts.show');
Route::get('/posts/create', 'PostController@create')->name('posts.create');
Route::post('/comments/store', 'CommentController@store')->name('comments.store');
Route::get('/image-upload', [ ImageUploadController::class, 'imageUpload' ])->name('image.upload');
Route::post('/image-upload', [ ImageUploadController::class, 'imageUploadPost' ])->name('image.upload.post');
Route::get('/schedule', [ ScheduleController::class , 'getSchedule'])->name('getSchedule');
Route::get('/meetartists', [ ActivesController::class , 'GetActivePage'])->name('activePage');

Route::get('/about', [ ActivesController::class , 'GetAbout'])->name('aboutPage');

Route::get('/albums', [ AlbumsController::class, 'GetUserGallery' ])->name('albums');
Route::get('/Gallery/show/{id}', [ AlbumsController::class, 'GetUserGalleryPhoto' ])->name('GalleryPhoto');


Route::prefix('adm')->group(function () {
    Route::get('/home', [FirstPageController::class, 'getIndex'])->name('adm.home')->middleware('admin');
    Route::get('/profile/edit', [FirstPageController::class, 'getProfile'])->name('profile.edit')->middleware('admin');
    Route::get('/profile/password', [FirstPageController::class, 'getProfile'])->name('profile.password')->middleware('admin');
    Route::get('/profile/update', [FirstPageController::class, 'getProfile'])->name('profile.update')->middleware('admin');

    Route::get('/posts', [AdminPostController::class, 'getPosts'])->name('adm.posts')->middleware('admin');
    Route::post('/posts/store', [AdminPostController::class, 'store'])->name('adm.posts.store')->middleware('admin');

    Route::get('/gallery', [AlbumsController::class, 'getGallery'])->name('adm.gallery')->middleware('admin');
    Route::POST('/gallery/store', [AlbumsController::class, 'StoreGallery'])->name('adm.gallery.store')->middleware('admin');
    Route::get('/gallerydetail/{id}', [AlbumsController::class, 'GetGalleryDetail'])->name('adm.gallerydetail')->middleware('admin');
    Route::post('/photo/store', [AlbumsController::class, 'StorePhotoInGallery'])->name('adm.photo.store')->middleware('admin');
    Route::post('/photo/delete', [AlbumsController::class, 'DeletePhoto'])->name('adm.photo.delete')->middleware('admin');

    Route::get('/Videos', [VideoController::class, 'getVideos'])->name('adm.videos')->middleware('admin');
    Route::post('/videos/store', [VideoController::class, 'storeVideos'])->name('adm.video.store')->middleware('admin');


    Route::get('/profile/index', [FirstPageController::class, 'getUsersTable'])->name('user.index')->middleware('admin');
    Route::get('/profile/icons', [FirstPageController::class, 'getProfile'])->name('icons')->middleware('admin');
    Route::get('/profile/map', [FirstPageController::class, 'getProfile'])->name('map')->middleware('admin');
    Route::get('/profile/table', [FirstPageController::class, 'getProfile'])->name('table')->middleware('admin');
    Route::get('/login', [FirstPageController::class, 'getLogin'])->name('adm.login');

});

//Route::get('/albums', 'HomeController@index')->name('home');
//Route::get('/photo/{id}', 'HomeController@index')->name('home');
//Route::get('/videos', 'HomeController@index')->name('home');
//Route::get('/video/{id}', 'HomeController@index')->name('home');
//Route::get('/voices/', 'HomeController@index')->name('home');
//Route::get('/voice/{id}', 'HomeController@index')->name('home');
//Route::get('/read/{sub}', 'HomeController@index')->name('home');
//Route::get('/post/{id}', 'HomeController@index')->name('home');
