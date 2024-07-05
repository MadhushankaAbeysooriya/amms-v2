<?php

use App\Http\Controllers\ReportPDF;
use App\Models\master\AnnualDemand;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\CronController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\DSDivisionController;
use App\Http\Controllers\LoginDetailController;
use App\Http\Controllers\master\ItemController;
use App\Http\Controllers\master\MenuController;
use App\Http\Controllers\AnnualDemandController;
use App\Http\Controllers\master\BrandController;
use App\Http\Controllers\SearchDetailController;
use App\Http\Controllers\UserHospitalController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\master\PaneltyController;
use App\Http\Controllers\master\QuarterController;
use App\Http\Controllers\master\LocationController;
use App\Http\Controllers\master\MenuItemController;
use App\Http\Controllers\master\SupplierController;
use App\Http\Controllers\master\RationDateController;
use App\Http\Controllers\master\RationTimeController;
use App\Http\Controllers\master\RationTypeController;
use App\Http\Controllers\DemandFromLocationController;
use App\Http\Controllers\master\MeasurementController;
use App\Http\Controllers\master\PaneltyRuleController;
use App\Http\Controllers\master\ReceiptTypeController;
use App\Http\Controllers\master\ItemCategoryController;
use App\Http\Controllers\master\LocationTypeController;
use App\Http\Controllers\ReceiptFromLocationController;
use App\Http\Controllers\master\RationCategoryController;
use App\Http\Controllers\master\QuarterItemPriceController;
use App\Http\Controllers\master\ApprovedUnitPriceController;
use App\Http\Controllers\master\RationSubCategoryController;
use App\Http\Controllers\master\RationYearController;
use App\Http\Controllers\RequisitionBookController;
use App\Http\Controllers\IssueVoucherController;
use App\Http\Controllers\CondemnationCertificateController;
use App\Http\Controllers\DemandFromCustomerController;
use App\Http\Controllers\CustomerIssuanceController;
use App\Http\Controllers\CustomerReceivedController;
use App\Http\Controllers\ExportController;

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


Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::group(['middleware' => ['auth']], function() {

    Route::resource('roles', RoleController::class);

    Route::get('/users/inactive/{id}',[UserController::class,'inactive'])->name('users.inactive');
    Route::get('/users/activate/{id}',[UserController::class,'activate'])->name('users.activate');
    Route::get('/users/resetpass/{id}',[UserController::class,'resetpass'])->name('users.resetpass');
    Route::resource('users', UserController::class);

    Route::get('/change-password',  [ChangePasswordController::class,'index'])->name('change.index');
    Route::post('/change-password', [ChangePasswordController::class,'store'])->name('change.password');

    Route::get('/logindetails',[LoginDetailController::class,'index'])->name('logindetails.index');

});
