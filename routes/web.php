<?php

//use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\roleController;
use App\Http\Controllers\UserController;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\AdressController;
use App\Http\Controllers\BodegaController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\CarModelController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ReceptionController;
use App\Http\Controllers\EntryOrderController;
use App\Http\Controllers\ItemClientController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\KindProductController;
use App\Http\Controllers\VoucherUserController;
use App\Http\Controllers\BodegaSucursalController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\BranchOfficeUserController;
use App\Http\Controllers\ProductClientVoucherController;


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


Route::get('/dashboard', function () {
    //toast('Success Toast','success');
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('users/asignar/{user}', [ UserController::class, 'asignar'])->name('users.asignar');
Route::put('users/asignar/bodega/{user}', [ UserController::class, 'asignar_bodega'])->name('users.asignar.bodega');


Route::get('bodega-sucursals/asignar/{itemClient}', [ ItemClientController::class, 'asignar'])->name('bodegaSucursals.asignar');
Route::put('bodega-sucursals/asignar/producto/{itemClient}', [ ItemClientController::class, 'asignar_producto'])->name('bodegaSucursals.asignar.producto');


Route::get('bodega-principal/asignar/{product}', [ ProductController::class, 'asignar'])->name('bodegas.asignar');
Route::put('bodega-principal/asignar/producto/{product}', [ ProductController::class, 'asignar_producto'])->name('bodegas.asignar.producto');


Route::resource('clients', ClientController::class)->names('clients');
Route::resource('users', UserController::class)->names('users');
Route::resource('cars', CarController::class)->names('cars');
Route::resource('stores', StoreController::class)->names('stores');
Route::resource('products', ProductController::class)->names('products');
Route::resource('adress', AdressController::class)->names('adress');
Route::resource('category', CategoryController::class)->names('category');
Route::resource('brands', BrandController::class)->names('brands');
Route::resource('carModels', CarModelController::class)->names('carModels');
Route::resource('bodegaSucursals', BodegaSucursalController::class)->names('bodegaSucursals');
Route::resource('bookings', BookingController::class)->names('bookings');
Route::resource('suppliers', SupplierController::class)->names('suppliers');
Route::resource('inventories', InventoryController::class)->names('inventories');
Route::resource('receptions', ReceptionController::class)->names('receptions');
Route::resource('entryOrders', EntryOrderController::class)->names('entryOrders');  
Route::resource('employees', EmployeeController::class)->names('employees');
Route::resource('itemClients', ItemClientController::class)->names('itemClients');  
Route::resource('orders', OrderController::class)->names('orders'); 
Route::resource('branchOfficeUsers', BranchOfficeUserController::class)->names('branchOfficeUsers'); 
Route::resource('productClientVouchers', ProductClientVoucherController::class)->names('productClientVouchers'); 
Route::resource('categoryProducts', CategoryProductController::class)->names('categoryProducts');
Route::resource('kindProducts', KindProductController::class)->names('kindProducts'); 
Route::resource('vouchers', VoucherController::class)->names('vouchers'); 
Route::resource('voucherUsers', VoucherUserController::class)->names('voucherUsers');   
Route::resource('roles', roleController::class)->names('roles');  
Route::resource('permissions', PermissionController::class)->names('permissions'); 
Route::resource('bodegas', BodegaController::class)->names('bodegas'); 






require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
