<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\AlbumsController;
use App\Http\Controllers\FirstPageController2;
use App\Http\Controllers\AdminPostController;
use \App\Http\Controllers\VideoController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ActivesController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\AdvertiseController;
use App\Http\Controllers\PressReleaseController;
use App\Http\Controllers\SiteConfigController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\SoundController;
use App\Http\Controllers\MeetController;

use App\Http\Controllers\ForumController;

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

Route::get('payment', 'PayPalController@payment')->name('payment');
Route::get('cancel', 'PayPalController@cancel')->name('payment.cancel');
Route::get('payment/success', 'PayPalController@success')->name('payment.success');

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
Route::get('/adbuy', [ AdvertiseController::class , 'GetAdvertiseUserPage'])->name('GetAdvertiseFrontPage');

Route::get('/sound', [SoundController::class, 'GetIndex'])->name('SoundView');
Route::get('/sound/{album}', [SoundController::class, 'GetAudios'])->name('AudiosView');


Route::get('/t', function () {
    event(new \App\Events\SendMessage());
    dd('Event Run Successfully.');
});


Route::get('/about', [ ActivesController::class , 'GetAbout'])->name('aboutPage');

Route::get('/contact', [ contactController::class , 'getContactView'])->name('ContactView');

Route::get('/chat', [ ChatController::class , 'GetIndex'])->name('chat');
Route::post('/chat/message', [ ChatController::class , 'postMessege']);
Route::get('/translation/{id}', 'TranslationController@index');


Route::get('/albums', [ AlbumsController::class, 'GetUserGallery' ])->name('albums');
Route::get('/Gallery/show/{id}', [ AlbumsController::class, 'GetUserGalleryPhoto' ])->name('GalleryPhoto');


Route::get('/video', [ VideoController::class, 'FrontVideos' ])->name('videos');
Route::get('/video/show/{id}', [ VideoController::class, 'CurrentVideoShow' ])->name('CurrentVideo');

Route::get('/pressrelease', [PressReleaseController::class, 'GetView'])->name('SendRelease');
Route::post('/contact/store', [ contactController::class , 'StoreContact']);


Route::prefix('adm')->group(function () {
    Route::get('/contact', [ contactController::class , 'getAdminContactView'])->name('AdminContactView');
    Route::get('/contact/{id}', [ contactController::class , 'getDetailAdminContactView'])->name('ContactDetailView');

    Route::get('/home', [FirstPageController2::class, 'getIndex'])->name('adm.home')->middleware('admin');
    Route::get('/profile/edit', [FirstPageController2::class, 'getProfile'])->name('profile.edit')->middleware('admin');

    Route::get('/sounds_albums', [SoundController::class, 'getAdminIndex'])->middleware('admin');
    Route::POST('/sounds_albums/store', [SoundController::class, 'StoreSound'])->name('adm.sounds_albums.store')->middleware('admin');

    Route::get('/profile/edit/{id}', [FirstPageController2::class, 'getProfile'])->name('profile.edit2')->middleware('admin');
    Route::get('/profile/password', [FirstPageController2::class, 'getProfile'])->name('profile.password')->middleware('admin');
    Route::get('/profile/update', [FirstPageController2::class, 'getProfile'])->name('profile.update')->middleware('admin');

    Route::get('/posts', [AdminPostController::class, 'getPosts'])->name('adm.posts')->middleware('admin');
    Route::post('/posts/store', [AdminPostController::class, 'store'])->name('adm.posts.store')->middleware('admin');

    Route::get('/gallery', [AlbumsController::class, 'getGallery'])->name('adm.gallery')->middleware('admin');
    Route::POST('/gallery/store', [AlbumsController::class, 'StoreGallery'])->name('adm.gallery.store')->middleware('admin');
    Route::get('/gallerydetail/{id}', [AlbumsController::class, 'GetGalleryDetail'])->name('adm.gallerydetail')->middleware('admin');
    Route::post('/photo/store', [AlbumsController::class, 'StorePhotoInGallery'])->name('adm.photo.store')->middleware('admin');
    Route::post('/photo/delete', [AlbumsController::class, 'DeletePhoto'])->name('adm.photo.delete')->middleware('admin');

    Route::get('/Videos', [VideoController::class, 'getVideos'])->name('adm.videos')->middleware('admin');
    Route::post('/videos/store', [VideoController::class, 'storeVideos'])->name('adm.video.store')->middleware('admin');

    Route::get('/SiteConfigs', [SiteConfigController::class, 'GetSiteConfigsView'])->name('adm.confview')->middleware('admin');
    Route::post('/store/about', [SiteConfigController::class, 'StoreAbout'])->name('adm.conf.about')->middleware('admin');

    Route::get('/profile/index', [FirstPageController2::class, 'getUsersTable'])->name('user.index')->middleware('admin');
    Route::get('/profile/icons', [FirstPageController2::class, 'getProfile'])->name('icons')->middleware('admin');
    Route::get('/profile/map', [FirstPageController2::class, 'getProfile'])->name('map')->middleware('admin');
    Route::get('/profile/table', [FirstPageController2::class, 'getProfile'])->name('table')->middleware('admin');
    Route::get('/login', [FirstPageController2::class, 'getLogin'])->name('adm.login');
    Route::get('/adminlogin', [FirstPageController2::class, 'getLogin'])->name('adminlogin');


    Route::get('/carousel', [CarouselController::class,'GetView'])->name('adm.Carousel')->middleware('admin');
    Route::Post('/carousel/store', [CarouselController::class, 'StoreSlide'])->name('adm.carouse.store')->middleware('admin');
    Route::get('/gallery/delete/{id}', [AlbumsController::class,'deleteGallery']);
    Route::get('/advertise', [ AdvertiseController::class , 'getAdminAddIndex'])->name('AdminAddView');

});
//Route::get('/albums', 'HomeController@index')->name('home');
//Route::get('/photo/{id}', 'HomeController@index')->name('home');
//Route::get('/videos', 'HomeController@index')->name('home');
//Route::get('/video/{id}', 'HomeController@index')->name('home');
//Route::get('/voices/', 'HomeController@index')->name('home');
//Route::get('/voice/{id}', 'HomeController@index')->name('home');
//Route::get('/read/{sub}', 'HomeController@index')->name('home');
//Route::get('/post/{id}', 'HomeController@index')->name('home');
Route::get('/fire', function () {
    event(new \App\Events\SendMessage());
    return 'ok';
});

Route::get('/meetartists', [ MeetController::class , 'GetView'])->name('MeetPage');
Route::get('/meetartists/{id}', [MeetController::class, 'GetDetailView'])->name('DetailMeetPage');

Route::get('/forum', [ForumController::class, 'GetView'])->name('forumMain');
Route::get('/forum/{id}', [ForumController::class,'GetDetailView'])->name('fourmView');
Route::post('/forum/store', [ForumController::class,'storeForumComment'])->name('forum.store');