<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OurClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\TelcoController;
use App\Http\Controllers\NonTelcoController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HseController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\RecentProjectController;
use App\Http\Controllers\RewardController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardNewsController;
use App\Models\Category;
use App\Models\User;
use App\Models\News ;
use App\Models\Telco;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard', [
        "page" => "dashboard"
    ]);
});


Route::get('/ourclients', [OurClientController::class, 'index'])->name('ourclients.index');
// Tambahan rute untuk CRUD (create, store, edit, update, delete) jika diperlukan
// Contoh:
// Route::get('/ourclients/create', [OurClientController::class, 'create'])->name('ourclients.create');
// Route::post('/ourclients', [OurClientController::class, 'store'])->name('ourclients.store');
// Route::get('/ourclients/{ourclient}', [OurClientController::class, 'edit'])->name('ourclients.edit');
// Route::put('/ourclients/{ourclient}', [OurClientController::class, 'update'])->name('ourclients.update');
// Route::delete('/ourclients/{ourclient}', [OurClientController::class, 'destroy'])->name('ourclients.destroy');


Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/experience', [ExperienceController::class, 'index'])->name('experience.index');
Route::get('/telco', [TelcoController::class, 'index'])->name('telco.index');
Route::get('/nontelco', [NonTelcoController::class, 'index'])->name('nontelco.index');
Route::get('/career', [CareerController::class, 'index'])->name('career.index');
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/hse', [HseController::class, 'index'])->name('hse.index');
Route::get('/recent-project', [RecentProjectController::class, 'index'])->name('recent-projcet.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/reward', [RewardController::class, 'index'])->name('reward.index');
// Route::get('/news', [NewsController::class, 'index'])->name('news.index');


    Route::get('/news', [NewsController::class, 'index']);
    Route::get('/news/{news:slug}', [NewsController::class, 'show']);
    Route::get('/categories',function(){
        return view('about.categories',[
            "page" => "category",
            'title' => "News Categories",
            'categories' => Category::all()
        ]);
    });
    Route::get('/categories/{category:slug}',function(Category $category){
        return view('about.news',[
            "page" => "category",
            'title' => "News By Category: $category->name",
            'news' => $category->news->load(['category','author']),

        ]);
    });


    Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::post('/logout', [LoginController::class, 'logout']);

    Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('/dashboard', function(){
        return view('dashboard.index',[
            "page" => "index",
        ]);
    })->middleware('auth');

    Route::get('/dashboard/news/checkSlug',[DashboardNewsController::class,'checkSlug'])->middleware('auth');

    Route::resource('dashboard/news', DashboardNewsController::class)->middleware('auth');

    // Route::get('/authors/{author:username}', function(User $author){
        //     return view('about.news',[
    //         "page" => "news",
    //         'title' => "News By Author: $author->name",
    //         'news' => $author->news->load(['category','author']),
    //     ]);
    // });