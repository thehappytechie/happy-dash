<?php

use App\Models\ShipMarkingCarving;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\BillSaleController;
use App\Http\Controllers\MortgageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DatatableController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\CoastalCraftController;
use App\Http\Controllers\RegisterShipController;
use App\Http\Controllers\RoleDatatableController;
use App\Http\Controllers\UserDatatableController;
use App\Http\Controllers\ChangeNameShipController;
use App\Http\Controllers\ShipInlandWaterController;
use App\Http\Controllers\InlandWatercraftController;
use App\Http\Controllers\CertificateSurveyController;
use App\Http\Controllers\ShipFishingVesselController;
use App\Http\Controllers\LicenseInlandCraftController;
use App\Http\Controllers\OwnershipCorporateController;
use App\Http\Controllers\ShipMarkingCarvingController;
use App\Http\Controllers\TranscriptRegisterController;
use App\Http\Controllers\CertificateDeletionController;
use App\Http\Controllers\CertificateRegistryController;
use App\Http\Controllers\ForcePasswordChangeController;
use App\Http\Controllers\LicenseCoastalCraftController;
use App\Http\Controllers\LicenseInlandVesselController;
use App\Http\Controllers\RegistryProvisionalController;
use App\Http\Controllers\RegistryFishingVesselController;
use App\Http\Controllers\InlandWatercraftLicenseController;
use App\Http\Controllers\InternationalCodeLetterController;
use Spatie\Health\Http\Controllers\HealthCheckResultsController;

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

Route::middleware(['auth', 'force.password.change', 'prevent.back.history', 'disable.login'])->group(function () {
    /*
|--------------------------------------------------------------------------
| Resource Controllers
|--------------------------------------------------------------------------
*/
    Route::resources([
        'coastal-watercraft' => CoastalCraftController::class,
        'change-name' => ChangeNameShipController::class,
        'ownership-corporate' => OwnershipCorporateController::class,
        'international-code' => InternationalCodeLetterController::class,
        'users' => UserController::class,
        'roles' => RoleController::class,
        'inland-watercraft-license' =>  InlandWatercraftLicenseController::class,
        'certificate-deletion' => CertificateDeletionController::class,
        'registry' =>  CertificateRegistryController::class,
        'registry-fishing-vessel' => RegistryFishingVesselController::class,
        'registry-provisional' => RegistryProvisionalController::class,
        'register-ship' => RegisterShipController::class,
        'survey' => CertificateSurveyController::class,
        'transcript-register' => TranscriptRegisterController::class,
        'mortgage' => MortgageController::class,
        'bill-sale' => BillSaleController::class,
        'inland-watercraft' => InlandWatercraftController::class,
        'ship-marking-carving' => ShipMarkingCarvingController::class,
        'ship-fishing-vessel' => ShipFishingVesselController::class,
        'ship-inland-water' => ShipInlandWaterController::class,
        'inland-coastal-watercraft' => LicenseCoastalCraftController::class,
        'inland-watercraft-license' => LicenseInlandCraftController::class,
        'inland-watervessel-license' => LicenseInlandVesselController::class,

    ]);
    Route::resource('profile', UserProfileController::class)->only(['edit', 'update']);


    /*
|--------------------------------------------------------------------------
| Datatable Controllers
|--------------------------------------------------------------------------
*/
Route::controller(DatatableController::class)->group(function() {
    Route::get('certificate-deletion','certificateDeletion')
    ->name('certificateDeletion');
});

    Route::get('users', [UserDatatableController::class, 'userDatatable'])
        ->name('userDatatable');
    Route::get('roles', [RoleDatatableController::class, 'roleDatatable'])
        ->name('roleDatatable');

    Route::get('registry', [DatatableController::class, 'certificateRegistry'])
        ->name('certificateRegistry');
    Route::get('registry-fishing-vessel', [DatatableController::class, 'registryFishingVessel'])
        ->name('certificateRegistryFishingVessel');
    Route::get('registry-provisional', [DatatableController::class, 'certificateRegistryProvisional'])
        ->name('certificateRegistryProvisional');
    Route::get('survey', [DatatableController::class, 'certificateSurvey'])
        ->name('certificateSurvey');
    Route::get('survey', [DatatableController::class, 'certificateSurvey'])
        ->name('certificateSurvey');
    Route::get('international-code', [DatatableController::class, 'internationalCode'])
        ->name('internationalCode');
    Route::get('change-name', [DatatableController::class, 'changeNameShip'])
        ->name('changeNameShip');
    Route::get('register-ship', [DatatableController::class, 'registerShip'])
        ->name('registerShip');
    Route::get('ownership-corporate', [DatatableController::class, 'ownershipCorporate'])
        ->name('ownershipCorporate');
    Route::get('transcript-register', [DatatableController::class, 'transcriptRegister'])
        ->name('transcriptRegister');
    Route::get('mortgage', [DatatableController::class, 'mortgage'])
        ->name('mortgage');
    Route::get('bill-sale', [DatatableController::class, 'billSale'])
        ->name('billSale');
    Route::get('coastal-watercraft', [DatatableController::class, 'coastalWatercraft'])
        ->name('coastalWatercraft');
    Route::get('inland-watercraft', [DatatableController::class, 'inlandWatercraft'])
        ->name('inlandWatercraft');
    Route::get('ship-marking-carving', [DatatableController::class, 'shipMarkingCarving'])
        ->name('shipMarkingCarving');
    Route::get('ship-inland-water', [DatatableController::class, 'shipInlandWater'])
        ->name('shipInlandWater');
    Route::get('ship-fishing-vessel', [DatatableController::class, 'shipFishingVessel'])
        ->name('shipFishingVessel');
    Route::get('inland-watercraft-license', [DatatableController::class, 'inlandWatercraftLicense'])
        ->name('inlandWatercraftLicense');
    Route::get('inland-coastal-watercraft', [DatatableController::class, 'licenseCoastalCraft'])
        ->name('licenseCoastalCraft');
    Route::get('activity', [ActivityController::class, 'log'])->name('userActivity');

    /*
|--------------------------------------------------------------------------
| Single Action Controllers
|--------------------------------------------------------------------------
*/
    Route::get('health', HealthCheckResultsController::class);
    Route::get('my-activity', [PageController::class, 'myActivity'])
        ->name('myActivity');
    Route::get('profile/change-password', [UserProfileController::class, 'changePassword'])
        ->name('changePassword');
    Route::get('profile/security', [UserProfileController::class, 'security'])
        ->name('security')->middleware('password.confirm');
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('password-change', ForcePasswordChangeController::class)
        ->only(['edit', 'update'])
        ->withoutMiddleware(['force.password.change']);
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('signout')->withoutMiddleware(['force.password.change']);
});
