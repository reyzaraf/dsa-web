<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminIndex;
use App\Http\Controllers\ApplicationFormController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StandardController;
use App\Http\Controllers\UserController;
// use App\Mail\ContactUs;
use App\Models\About;
use App\Models\Article;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Certificate;
use App\Models\Client;
use App\Models\Feedback;
use App\Models\Service;
use App\Models\Standard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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
    $articles = Article::latest()->where('status','Diterima')->limit(3)->get();
    $blogs = Blog::latest()->where('status','Diterima')->limit(3)->get();

    return view('landingpage', compact('articles', 'blogs'));
})->name('landingpage');
Route::get('/tim', function () {
    return view('tim');
})->name('timpage');
Route::get('/trainings', [StandardController::class, 'indexPublic'])->name('trainings.show');
Route::get('/services/{id}', [ServiceController::class, 'show'])->name('services.show');
Route::get('/berita', [BlogController::class, 'indexPublic'])->name('blogs.indexPublic');
Route::get('/berita/{slug}', [BlogController::class, 'showPublic'])->name('blogs.showPublic');
Route::get('/articles', [ArticleController::class, 'indexPublic'])->name('articles.indexPublic');
Route::get('/articles/{slug}', [ArticleController::class, 'showPublic'])->name('articles.showPublic');

Route::get('/about', function () {
    $about = About::first();
    $blogs = Blog::latest()->limit(10)->get();

    return view('about', compact('about', 'blogs'));
})->name('about.index');

Route::get('/dashboard', function () {
    return redirect()->route('admin.index');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth', 'verified', 'can:admin access'])->prefix('admdsa')->name('admin.')->group(function () {
    Route::get('/', AdminIndex::class)->name('index');

    // roles & permissions
    Route::resource('/permissions', PermissionController::class)->except(['show']);
    Route::resource('/roles', RoleController::class)->except(['show']);

    // users
    Route::resource('/users', UserController::class);
    // blogs | comment this route below to disable Blog features
    Route::resource('/blogs', BlogController::class);
    Route::get('/blogs-draft',[BlogController::class, 'indexDraft'])->name('blogs.draft');
    Route::get('/blogs-decline',[BlogController::class, 'indexDecline'])->name('blogs.decline');
    Route::get('/blogs-review/{slug}',[BlogController::class, 'review'])->name('blogs.review');
    Route::post('/blogs-accepting/{id}',[BlogController::class, 'accept'])->name('blogs.accepting');
    Route::post('/blogs-declining/{id}',[BlogController::class, 'decline'])->name('blogs.declining');
    // categories | comment this route below to disable Category features
    Route::resource('/categories', CategoryController::class);

    // Articles | comments this route below to disable Blog features
    Route::resource('/articles', ArticleController::class);
    Route::get('/articles-draft',[ArticleController::class, 'indexDraft'])->name('articles.draft');
    Route::get('/articles-decline',[ArticleController::class, 'indexDecline'])->name('articles.decline');
    Route::get('/article-review/{slug}',[ArticleController::class, 'review'])->name('articles.review');
    Route::post('/articles-accepting/{id}',[ArticleController::class, 'accept'])->name('articles.accepting');
    Route::post('/articles-declining/{id}',[ArticleController::class, 'decline'])->name('articles.declining');

    // bulk delete
    Route::delete('/bulk-delete/permissions', [PermissionController::class, 'massDelete'])->name('permissions.bulkDelete');
    Route::delete('/bulk-delete/roles', [RoleController::class, 'massDelete'])->name('roles.bulkDelete');
    Route::delete('/bulk-delete/users', [UserController::class, 'massDelete'])->name('users.bulkDelete');
    Route::delete('/bulk-delete/categories', [CategoryController::class, 'massDelete'])->name('categories.bulkDelete');
    Route::delete('/bulk-delete/blogs', [BlogController::class, 'massDelete'])->name('blogs.bulkDelete');
    Route::delete('/bulk-delete/articles', [ArticleController::class, 'massDelete'])->name('articles.bulkDelete');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('account/verify-new-email/{token}', [AccountController::class, 'verifyNewEmail'])->name('account.verifyNewEmail');
    Route::resource('account', AccountController::class)->only(['index', 'edit', 'update']);
});

// sample captcha : start
// Route::view('/test', 'test');


// Route::get('/reload-captcha', function () {
//     return response()->json(['captcha' => captcha_img('math')]);
// });
require __DIR__ . '/auth.php';
