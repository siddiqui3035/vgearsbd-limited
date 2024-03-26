<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontController;

use App\Http\Controllers\Admin\{
    BlogController,
    OurTeamController,
    ContactUsController,
    NewsLetterController,
    AboutVgearController,
    BannerController,
    UnitController,
    AddressController,
    DiscountController,
    CategoryController,
    SubcategoryController,
    BrandController,
    UserController,
    AdminController,
    AdmindashboardController,
    CartController,
    OrderController,
    SocialLinkController,
    ProductController,
};

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

// Route::get('/', function () {
//     return view('frontend.layouts.front-app');
// });

// Route::get('/', function () {
//     return view('frontend.layouts.index');
// });

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('about/us', [FrontController::class, 'aboutUs'])->name('aboutus');
Route::get('contact/us', [FrontController::class, 'contactUs'])->name('contactus');

Route::get('blogs', [FrontController::class, 'ourBlogs'])->name('blog.index');
Route::get('blogs/{blog}/details', [FrontController::class, 'singleBlog'])->name('blog.details');
Route::post("blogs/search", [FrontController::class, 'searchBlog'])->name('blogs.search');

Route::post('contact/us', [ContactUsController::class, 'store'])->name('contact.store');
Route::post('subscribes/create', [NewsLetterController::class, 'store'])->name('subscribe.store');

Route::get('category/{category}/products', [CategoryController::class, 'show'])->name('category.products.show');
Route::get('product/details/{product}', [FrontController::class, 'singleProduct'])->name('product.details');
Route::get('products', [FrontController::class, 'product'])->name('products');



// Route::get('/admin/dashboard', function () {
//     return view('admin.index');
// })->middleware(['auth', 'verified'])->name('admin.dashboard');

// Route::get('/test', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('test');

Route::middleware('auth')->group(function () {
    // Frontend routes
    // Route::get('/admin/dashboard', [AdmindashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('my/account', [FrontController::class, 'myAccount'])->name('my.account');
    Route::resource('cart', CartController::class);
    Route::get('checkout', [FrontController::class, 'checkout'])->name('checkout');

    Route::get('/admin/orders', [OrderController::class, 'index'])->name('admin.orders.index');
    Route::put('/admin/orders/{order}', [OrderController::class, 'updateStatus'])->name('update.order.status');
    Route::get('/admin/orders/{order}/show', [OrderController::class, 'show'])->name('admin.orders.show');

    Route::post('checkout', [OrderController::class, 'store'])->name('orders.store');

    // Blog
    Route::resource('admin/blogs', BlogController::class);
    // Our teams
    Route::resource('admin/teams', OurTeamController::class);
    // Contact us
    Route::resource('admin/contacts', ContactUsController::class)->except('create', 'store', 'edit', 'update');
    Route::put('admin/contacts/{contact}/status', [ContactUsController::class, 'status'])->name('contacts.status');
    //Subscribe
    Route::get('admin/subscribes', [NewsLetterController::class, 'index'])->name('admin.subscribe');
    Route::post('admin/subscribes/mail', [NewsLetterController::class, 'mailSend'])->name('subscribe.mail');
    Route::put('admin/subscribes/{subscribe}/status', [NewsLetterController::class, 'status'])->name('subscribes.status');
    // About Vgears
    Route::resource('admin/about/us', AboutVgearController::class);
    // Banners
    Route::resource('admin/banners', BannerController::class);
    // Units
    Route::resource('admin/units', UnitController::class);
    // Address
    Route::resource('admin/address', AddressController::class);
    // Discount
    Route::resource('admin/discounts', DiscountController::class);
    // Category
    Route::resource('admin/categories', CategoryController::class);

    // Subcategory
    Route::get('admin/subcategories', SubcategoryController::class)->name('admin.subcategories.index');
    // Brand
    Route::resource('admin/brands', BrandController::class);
    // Users
    Route::resource('admin/users', UserController::class);
    // Users
    Route::resource('admin/admins', AdminController::class);
    Route::put('admin/admins/{admin}/status', [AdminController::class, 'status'])->name('admins.status');
    // Social Links
    Route::resource('admin/sociallinks', SocialLinkController::class);
    // Products
    Route::resource('admin/products', ProductController::class);
    Route::post('admin/products/fetch-purchase-units', [ProductController::class, 'fetchPurcahseUnit']);

    // Route::post('admin/products/fetch-sale-units', [ProductController::class, 'fetchSaleUnit']);

});


Route::middleware(['auth', 'admin'])->group(function () {
    // all admin and super admin routes should be written here

    Route::get('/admin/dashboard', [AdmindashboardController::class, 'index'])->name('admin.dashboard');
});

require __DIR__ . '/auth.php';
