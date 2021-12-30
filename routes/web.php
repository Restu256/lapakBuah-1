<?php
use App\Http\Controllers\Admin\VoucherController;
use App\Http\Controllers\Admin\GudangController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\StockController;
use App\Http\Controllers\Admin\BankController;
use App\Http\Controllers\Admin\SupplierController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ImageBlogController;
use App\Http\Controllers\Admin\ImageProductController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\Blog\HomeController as BlogHomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController as ControllersCategoryController;
use App\Http\Controllers\CategoryFrontController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/blog', [BlogHomeController::class, 'index']);

Route::get('/', [HomeController::class, 'index']);
Route::post('logged_in', [LoginController::class, 'authenticate']);

Route::get('category_front', [CategoryFrontController::class, 'index']);
Route::get('categories/{id}', [CategoryFrontController::class, 'detail'])->name('categories-detail');

Route::get('/details/{id}', [DetailController::class, 'index'])->name('product-detail');
Route::post('/details/{id}', [DetailController::class, 'add'])->name('product-add');


Route::get('cart_front', [CartController::class, 'index']);
Route::get('check_out', [CartController::class, 'check_out']);

Route::get('detail_front', [DetailController::class, 'index']);



Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return view('auth.verify')->with('success','Cache is cleared');
});

// Auth::routes(['verify' => true]);


Route::middleware(['auth', 'verified'])->group( function(){
    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/success', [HomeController::class, 'success']);
    Route::resource('dashboard', DashboardController::class); 
    Route::get('/logout', [DashboardController::class, 'signout']);
    Route::resource('bank', BankController::class);

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('routes', RouteController::class);
    Route::resource('voucher', VoucherController::class);

    Route::resource('supplier', SupplierController::class);
    Route::resource('stock', StockController::class);
    Route::resource('transaction', TransactionController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('category_blog', BlogCategoryController::class);
    Route::resource('product', ProductController::class);
    Route::resource('gudang', GudangController::class);
    Route::resource('imageproduct', ImageProductController::class);
    Route::resource('blog', BlogController::class);
    Route::resource('imageblog', ImageBlogController::class);
    Route::resource('cart', CartController::class);
    Route::delete('/cart/{id}', [CartController::class, 'delete'])->name('cart-delete');


});
