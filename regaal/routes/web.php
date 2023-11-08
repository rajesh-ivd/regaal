<?php
use Illuminate\Support\Facades\Route;

//Frontend Routs
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\Frontend\AboutController as FrontendAboutController;
use App\Http\Controllers\Frontend\LeadershipController as FrontendLeadershipController;
use App\Http\Controllers\Frontend\ProductsController as FrontendProductsController;
use App\Http\Controllers\Frontend\OthersController as FrontendOthersController;
use App\Http\Controllers\Frontend\CareersController as FrontendCareersController;
use App\Http\Controllers\Frontend\ContactController as FrontendContactController;

Route::get('/',[FrontendHomeController::class,'index']);
Route::get('/about',[FrontendAboutController::class,'index']);
Route::get('/leadership',[FrontendLeadershipController::class,'index']);
Route::get('/products',[FrontendProductsController::class,'index']);
Route::get('/gallery',[FrontendOthersController::class,'gallery']);
Route::get('/csr',[FrontendOthersController::class,'csr']);
Route::get('/careers',[FrontendCareersController::class,'index']);
Route::get('/contact',[FrontendContactController::class,'index']);

//Product Routes
Route::get('/primary_product',[FrontendProductsController::class,'primaryProduct']);
Route::get('/allied_products',[FrontendProductsController::class,'alliedProducts']);
Route::get('/value_added_products',[FrontendProductsController::class,'valueAddedProducts']);
Route::get('/modified_starches',[FrontendProductsController::class,'modifiedStarches']);
Route::get('/future_products',[FrontendProductsController::class,'futureProducts']);

//Backend Routs
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\LeadershipController;
use App\Http\Controllers\Backend\ProductsController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\CSRController;
use App\Http\Controllers\Backend\CareersController;
use App\Http\Controllers\Backend\ContactController;

Route::get('/admin',[LoginController::class,'index']);
Route::post('/admin/admin/login_check', [LoginController::class, 'loginCheck'])->name('admin.login.post');

Route::get('/admin/home',[HomeController::class,'index']);
Route::get('/admin/about',[AboutController::class,'index']);
Route::get('/admin/leadership',[LeadershipController::class,'index']);
Route::get('/admin/products',[ProductsController::class,'index']);
Route::get('/admin/gallery',[GalleryController::class,'index']);
Route::get('/admin/csr',[CSRController::class,'index']);
Route::get('/admin/careers',[CareersController::class,'index']);
Route::get('/admin/contact',[ContactController::class,'index']);

//Backend Controller Banner
use App\Http\Controllers\Backend\Banner\BannerController;
use App\Http\Controllers\Backend\Banner\IntroductionSectionController;
use App\Http\Controllers\Backend\Banner\JourneySectionController;
use App\Http\Controllers\Backend\Banner\EnviromentSectionnController;
//Baanner Controller
// Route::get('/admin/home', [BannerController::class, 'viewImgdesktop']);
Route::post('/save_banner',[BannerController::class,'saveBanner']);
Route::post('/save_banner_mob',[BannerController::class,'saveBannerMob']);
//update banner
Route::post('/save_banner_desk_update', [BannerController::class, 'updateBannerDesk']);
Route::post('/save_banner_mob_update', [BannerController::class, 'updateBannerMob']);
Route::get('/admin/home/{id}/{target}', [BannerController::class, 'deskMobID']);

// Introduction Section Controller

Route::post('/section1/save', [IntroductionSectionController::class, 'homeSection1Save']);


// Journey Section Controller
Route::get('/home/section2', [JourneySectionController::class, 'JourneyData']);
Route::get('/api/journey-data', [JourneySectionController::class, 'getJourneyData']);
Route::post('/section2/save', [JourneySectionController::class, 'insertJourneyData']);
// Route::post('/update2/save/{id}', [JourneySectionController::class, 'updateJourneyData']);
Route::post('/api/update-journey-data/{id}', [JourneySectionController::class, 'updateJourneyData'])->name('journey.update');



Route::get('/api/introduction-data', [IntroductionSectionController::class, 'fetchIntroductionData']);
Route::get('/home/section1', [IntroductionSectionController::class, 'IntoductionData']);
Route::post('/api/update-introduction-data', [HomeController::class, 'updateIntroductionData']);


Route::post('/updateAboutSection1', [AboutController::class, 'sectionUpdate']);
