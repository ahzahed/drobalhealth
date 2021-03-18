<?php

use App\Blog;
use App\User;
use App\VisitorModel;
use Illuminate\Support\Facades\Auth;
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
    $UserIP = VisitorModel::get_ip();
    date_default_timezone_set("Asia/Dhaka");
    $timeDate = date("Y-m-d h:i:sa");
    $getbrowser = VisitorModel::get_browsers();
    $getdevice = VisitorModel::get_device();
    $getos = VisitorModel::get_os();

    $ip_address = VisitorModel::where('ip_address', $UserIP)->first();

    if (!$ip_address) {
        VisitorModel::insert(['ip_address' => $UserIP, 'visit_time' => $timeDate, 'getbrowser' => $getbrowser, 'getdevice' => $getdevice, 'getos' => $getos]);
    }
    // $blogs = Blog::paginate(6);
    // $users = User::where('user_type', '=', '2')->get();
    // return view('home', compact('blogs','users'));
    $blogs = Blog::paginate(15);
    $limitedBlogs = Blog::orderByDesc('priority')->limit(8)->get();
    return view('frontend/allblogs', compact('blogs', 'limitedBlogs'));
});
Route::get('/homemain', function () {
    $blogs = Blog::paginate(6);
    $users = User::where('user_type', '=', '2')->get();
    return view('home', compact('blogs', 'users'));
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');;

//For Admin
Route::get('/visitor', 'VisitorController@visitorIndex');

/* Add User by admin */
Route::get('/adduser_byadmin', 'AddUserByAdminController@adduser_byadmin')->name('adduser_byadmin');
Route::post('/adduser_byadmin.add', 'AddUserByAdminController@adduser_byadmin_store')->name('adduser_byadmin.add');
Route::get('/userroleDelete/{id}', 'AddUserByAdminController@userroleDelete');

//User Role
Route::get('/userrole', 'AddUserByAdminController@userrole')->name('userrole');

/* Blog  Resource Route */
Route::resource('blog', 'BlogController');
Route::get('/addBlog', 'BlogController@addBlog');
Route::get('/allBlog', 'BlogController@allBlog');
Route::get('/trash_blog', 'BlogController@trash_blog');

Route::get('/blogActive/{id}', 'BlogController@active');
Route::get('/blogDeactive/{id}', 'BlogController@deactive');
Route::get('/blogDelete/{id}', 'BlogController@blogDelete');
Route::get('/blogForceDelete/{id}', 'BlogController@blogForceDelete');
Route::get('/blogRestore/{id}', 'BlogController@blogRestore');
//Blog in frontend
Route::get('/blog_details/{id}', 'BlogController@blog_details');
Route::get('/front_all_blogs', 'BlogController@front_all_blogs')->name('front_all_blogs');
Route::get('/posted_by/{id}', 'BlogController@posted_by')->name('posted_by');


// New Register maintain, For admin panel
Route::get('/registeredUser', 'RegisteredUserController@index');
Route::get('/registeredUserActive/{id}', 'RegisteredUserController@active');
Route::get('/registeredUserDeactive/{id}', 'RegisteredUserController@deactive');
Route::get('/pendingUser', 'RegisteredUserController@pendingUser');
Route::get('/approveUser/{id}', 'RegisteredUserController@approveUser');
Route::get('/registeredUserView/{id}', 'RegisteredUserController@registeredUserView');
Route::get('/user_profile/{id}', 'RegisteredUserController@user_profile');
Route::get('/registeredUserDelete/{id}', 'RegisteredUserController@registeredUserDelete');
Route::get('/pendingUserDelete/{id}', 'RegisteredUserController@pendingUserDelete');
//Edit Profile
Route::post('/update_user/{id}', 'RegisteredUserController@update_user');

/*  Contact */
Route::resource('contact', 'ContactController');
Route::get('/contactDelete/{id}', 'ContactController@contactDelete');
Route::post('/replypeople/{id}', 'ContactController@replypeople');

//Ckeditor image
Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');

//Crop Image
Route::get('image-cropper', 'CKEditorController@index');
Route::post('image-cropper/upload', 'CKEditorController@cropedupload');
