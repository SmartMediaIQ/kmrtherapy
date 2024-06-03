<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BonusController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\InsightsController;
use App\Http\Controllers\MarketingController;

require __DIR__.'/auth.php';

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/dashboard', function () {
    return view('modules.dash.index');
})->middleware(['auth'])->name('dashboard');

Route::name('role.')->prefix('role')->group(function ()
{
    Route::get('/', [RoleController::class, 'index'])->name('index')->middleware('can:view role');
    Route::get('/create', [RoleController::class, 'create'])->name('create')->middleware('can:create role');
    Route::post('/store', [RoleController::class, 'store'])->name('store')->middleware('can:create role');
    Route::get('/edit/{id}', [RoleController::class, 'edit'])->name('edit')->middleware('can:update role');
    Route::put('/update/{id}', [RoleController::class, 'update'])->name('update')->middleware('can:update role');
});

Route::name('user.')->prefix('user')->group(function ()
{
    Route::get('/', [UserController::class, 'index'])->name('index')->middleware('can:view user');
    Route::get('/create', [UserController::class, 'create'])->name('create')->middleware('can:create user');
    Route::post('/store', [UserController::class, 'store'])->name('store')->middleware('can:create user');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit')->middleware('can:update user');
    Route::put('/update/{id}', [UserController::class, 'update'])->name('update')->middleware('can:update user');
    Route::get('/delete/{id}', [UserController::class, 'destroy'])->name('delete')->middleware('can:delete user');
    Route::get('/user/permission/{id}', [UserController::class, 'getUserPermission'])->name('permission')->middleware('can:update user');
    Route::post('/user/permission/{id}', [UserController::class, 'updateUserPermission'])->name('permission')->middleware('can:update user');
});

Route::group(['prefix'  =>   'profile'], function() {
    Route::get('/', [ProfileController::class, 'index'])->name('profile');
    Route::patch('/{user}/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/{user}/changepassword', [ProfileController::class, 'changepassword'])->name('profile.changepassword');
});

Route::group(['prefix'  =>   'setting'], function() {
    Route::get('general', [SettingController::class, 'general'])->name('setting.general');
    Route::post('/update', [SettingController::class, 'update'])->name('setting.update');
    Route::get('/sociallink', [SettingController::class, 'sociallink'])->name('setting.sociallink');
    Route::get('/apidetails', [SettingController::class, 'apidetails'])->name('setting.apidetails');
});

Route::group(['prefix' => 'clients'], function() {
    Route::get('/', [ClientController::class, 'index'])->name('clients.index');
    Route::get('/create', [ClientController::class, 'create'])->name('clients.create');
    Route::post('/store', [ClientController::class, 'store'])->name('clients.store');
    Route::get('/edit/{id}', [ClientController::class, 'edit'])->name('clients.edit');
    Route::put('/update/{id}', [ClientController::class, 'update'])->name('clients.update');
    Route::get('/delete/{id}', [ClientController::class, 'destroy'])->name('clients.delete');
});

Route::group(['prefix' => 'leads'], function() {
    Route::get('/', [LeadController::class, 'index'])->name('leads.index');
    Route::get('/create', [LeadController::class, 'createLead'])->name('leads.create');
    Route::post('/store', [LeadController::class, 'storeLead'])->name('leads.store');
    Route::get('/edit/{id}', [LeadController::class, 'editLead'])->name('leads.edit');
    Route::put('/update/{id}', [LeadController::class, 'updateLead'])->name('leads.update');
    Route::get('/delete/{id}', [LeadController::class, 'destroyLead'])->name('leads.delete');
});

// for insights
Route::group(['prefix' => 'insights'], function() {
    Route::get('/', [InsightsController::class, 'index'])->name('insights.index');
    Route::get('/create', [InsightsController::class, 'createInsight'])->name('insights.create');
    Route::post('/store', [InsightsController::class, 'storeInsight'])->name('insights.store');
    Route::get('/edit/{id}', [InsightsController::class, 'editInsight'])->name('insights.edit');
    Route::put('/update/{id}', [InsightsController::class, 'updateInsight'])->name('insights.update');
    Route::get('/delete/{id}', [InsightsController::class, 'destroyInsight'])->name('insights.delete');
});

// for bonus
Route::group(['prefix' => 'bonus'], function() {
    Route::get('/', [BonusController::class, 'index'])->name('bonus.index');
    Route::get('/create', [BonusController::class, 'createBonus'])->name('bonus.create');
    Route::post('/store', [BonusController::class, 'storeBonus'])->name('bonus.store');
    Route::get('/edit/{id}', [BonusController::class, 'editBonus'])->name('bonus.edit');
    Route::put('/update/{id}', [BonusController::class, 'updateBonus'])->name('bonus.update');
    Route::get('/delete/{id}', [BonusController::class, 'destroyBonus'])->name('bonus.delete');
});

// for marketing
Route::group(['prefix' => 'marketing'], function() {
    Route::get('/', [MarketingController::class, 'index'])->name('marketing.index');
    Route::get('/create', [MarketingController::class, 'createMarketing'])->name('marketing.create');
    Route::post('/store', [MarketingController::class, 'storeMarketing'])->name('marketing.store');
    Route::get('/edit/{id}', [MarketingController::class, 'editMarketing'])->name('marketing.edit');
    Route::put('/update/{id}', [MarketingController::class, 'updateMarketing'])->name('marketing.update');
    Route::get('/delete/{id}', [MarketingController::class, 'destroyMarketing'])->name('marketing.delete');
});

// for agency
Route::group(['prefix' => 'agency'], function() {
    Route::get('/', [AgencyController::class, 'index'])->name('agency.index');
    Route::get('/create', [AgencyController::class, 'createAgency'])->name('agency.create');
    Route::post('/store', [AgencyController::class, 'storeAgency'])->name('agency.store');
    Route::get('/edit/{id}', [AgencyController::class, 'editAgency'])->name('agency.edit');
    Route::put('/update/{id}', [AgencyController::class, 'updateAgency'])->name('agency.update');
    Route::get('/delete/{id}', [AgencyController::class, 'destroyAgency'])->name('agency.delete');
});

// for export
Route::group(['prefix' => 'export'], function() {
    Route::get('/', [ExportController::class, 'index'])->name('export.index');
});
