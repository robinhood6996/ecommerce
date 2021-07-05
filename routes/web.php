<?php

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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('pages.index');
});

Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('password/change', 'HomeController@PasswordChange')->name('password.change');
Route::post('password/update', 'HomeController@PasswordUpdate')->name('password.update');

//Admin
Route::get('admin/home', 'AdminController@index');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('login.admin');
Route::post('admin', 'Admin\LoginController@login');


//Admin category
Route::get('admin/categories', 'Admin\category\categoryController@category')->name('categories');
Route::post('admin/store/category', 'Admin\category\categoryController@storeCategory')->name('store.category');
Route::get('delete/category/{id}', 'Admin\category\categoryController@deleteCategory');
Route::get('edit/category/{id}', 'Admin\category\categoryController@editCategory');
Route::post('update/category/{id}', 'Admin\category\categoryController@updateCategory');

//Admin Brands
Route::get('admin/brands', 'Admin\brand\brandController@brands')->name('brands');
Route::post('admin/store/brand', 'Admin\brand\brandController@storeBrand')->name('store.brand');
Route::get('delete/brand/{id}', 'Admin\brand\brandController@deleteBrand');
Route::get('edit/brand/{id}', 'Admin\brand\brandController@editBrand');
Route::post('update/brand/{id}', 'Admin\brand\brandController@updateBrand');

//Sub categories====
Route::get('admin/subcategory', 'Admin\category\subcategoryController@subCategories')->name('sub.categories');
Route::post('admin/store/subcategory', 'Admin\category\subcategoryController@storeSubCategory')->name('store.subcategory');
Route::get('delete/subcategory/{id}', 'Admin\category\subcategoryController@deleteSubCategory');
Route::get('edit/subcategory/{id}', 'Admin\category\subcategoryController@editSubCategory');
Route::post('update/subcategory/{id}', 'Admin\category\subcategoryController@updateSubCategory');

// get/subcategory/ by ajax========
Route::get('get/subcategory/{category_id}', 'Admin\ProductController@GetSubcat');

//Coupons======
Route::get('admin/coupons', 'Admin\couponController@coupons')->name('coupons');
Route::post('admin/store/coupon', 'Admin\couponController@storeCoupon')->name('store.coupon');
Route::get('edit/coupon/{id}', 'Admin\couponController@editCoupon');
Route::get('delete/coupon/{id}', 'Admin\couponController@deleteCoupon');
Route::post('update/coupon/{id}', 'Admin\couponController@updateCoupon');

//Admin Newsletter====
Route::get('admin/newsletters', 'Admin\couponController@Newsletters')->name('admin.newletters');
Route::get('delete/sub/{id}', 'Admin\couponController@deletesub');


//Products Route here==========
Route::get('admin/products', 'Admin\ProductController@index')->name('all.product');
Route::get('admin/products/add', 'Admin\ProductController@create')->name('add.product');
Route::post('admin/store/product', 'Admin\ProductController@Store')->name('store.product');
Route::get('inactive/product/{id}', 'Admin\ProductController@Inactive');
Route::get('active/product/{id}', 'Admin\ProductController@Active');
Route::get('delete/product/{id}', 'Admin\ProductController@Delete');
Route::get('view/product/{id}', 'Admin\ProductController@ViewProduct');
Route::get('edit/product/{id}', 'Admin\ProductController@EditProduct');
Route::post('update/product/withoutphoto/{id}', 'Admin\ProductController@UpdateProductWithoutPhoto');


//Post Routes Here=======
Route::get('admin/posts', 'Admin\posts\PostController@IndexPost')->name('index.post');
Route::get('admin/post/category', 'Admin\posts\PostController@IndexCategory')->name('index.category');
Route::get('admin/post/category/create', 'Admin\posts\PostController@AddCategory')->name('create.post.category');
Route::post('admin/posts/category/store', 'Admin\posts\PostController@StoreCategory')->name('store.post.category');
Route::get('edit/post/category/{id}', 'Admin\posts\PostController@EditPostCategory');
Route::post('update/post/category/{id}', 'Admin\posts\PostController@UpdatePostCategory');
Route::get('delete/post/category/{id}',  'Admin\posts\PostController@DeletePostCategory');
Route::get('admin/add/post', 'Admin\posts\PostController@CreatePost');
Route::post('admin/posts/store', 'Admin\posts\PostController@StorePost')->name('store.post');
Route::get('edit/post/{id}', 'Admin\posts\PostController@EditPost');
Route::post('admin/posts/update', 'Admin\posts\PostController@UpdatePost')->name('update.post');


//All Frontend Routes Here=======
Route::post('store/newsletter', 'Frontend\FrontCrontroller@StoreNewsletter')->name('store.newsletter');


//Wishlist Routes Here===========
Route::get('/add/wishlist/{id}', 'WishlistController@AddWishlist');

//Cart Routes Here==========
Route::get('/add/to/cart/{id}', 'CartController@AddCart');
Route::get('check', 'CartController@Check');











// Route::get('test',function(){
//     Cart::add('293ad', 'Product 1', 1, 9.99, 550);

// });
// Route::get('cart',function(){
//    return Cart::content();

// });