<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EbloodController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\DashboardController;
use App\Models\Donor;
use App\Models\Blood;


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

// Route::get('/EDONOR', function () {
//     return view('super');

// });
// Route::get('/',[EbloodController::class,'eblood'])->name('eblood');

Route::get('/', [DashboardController::class,'index'])->name('index');
Route::get('/index', [DashboardController::class,'index'])->name('index');

// Route::get('/',[HomeController::class,'index'])->name('/index');
Route::get('/donor_search', [EbloodController::class,'donor_search']);
Route::post('/donor_search', [EbloodController::class,'donor_search'])->name('donor_search');

Route::get('eblood/{id}',[EbloodController::class,'eblood'])->name('eblood');
Route:: get('/blood_donorss', [HomeController::class,'home_show'])->name('blood_donorss');
Route:: get('/contact_us', [ContactController::class,'show'])->name('contact_us');
Route::get('/homelayout2',[HomeController::class,'index'])->name('homelayout2');
Route::get('aboutus',[AboutController::class,'index'])->name('aboutus');
Route::get('/faq',[PageController::class,'faq'])->name('faq');
Route::get('/layout_one',[PageController::class,'first_layout'])->name('layout_one');
Route::get('/layout_two',[PageController::class,'second_layout'])->name('layout_two');
Route::get('/all_post',[BlogController::class,'allpost'])->name('all_post');
Route::get('/single_page',[BlogController::class,'singlepage'])->name('single_page');
Route::get('/all_compaign',[CampaignController::class,'all'])->name('all_compaign');
Route::get('/single_compaigns',[CampaignController::class,'single'])->name('single_compaigns');



Route::post('/c_store',[AdminController::class,'store'])->name('c_store');
Route::get('/admin_register_index',[AdminController::class,'Admin_register'])->name('admin_register_index');
// Route::get('/admin_login_index',[AdminController::class,'Admin_index'])->name('Admin_index');

// donors
// Route::get('/index',[AdminController::class,'dashboard_index'])->name('dashboard_index');
Route::get('/list',[AdminController::class,'Donor_list'])->name('Donor_list');
Route::get('/create',[AdminController::class,'Donor_create'])->name('Donor_create');
Route::get('/donor_create',[AdminController::class,'Donor_create']);
Route::post('/donor_store',[AdminController::class,'Donor_store'])->name('donor_store');
Route::get('/donor_delete/{id}',[AdminController::class,'donor_delete'])->name('donor_delete');
Route::get('/donor_detils/{id}',[AdminController::class,'donor_detils'])->name('donor_detils');
Route::get('/donor_edit/{id}',[AdminController::class,'donor_edit'])->name('donor_edit');
Route::post('/donor_update/{id}',[AdminController::class,'donor_update'])->name('donor_update');

// cities
Route::get('/list_cities',[AdminController::class,'list_cities'])->name('list_cities');
Route::get('/create_cities',[AdminController::class,'create_cities'])->name('create_cities');
Route::get('/edit_cities/{id}',[AdminController::class,'edit_cities'])->name('edit_cities');
Route::post('/cities_update/{id}',[AdminController::class,'cities_update'])->name('cities_update');

// blood group
Route::get('/list_blood',[AdminController::class,'list_blood'])->name('list_blood');
Route::get('/create_blood',[AdminController::class,'create_blood'])->name('create_blood');
Route::get('/edit_blood/{id}',[AdminController::class,'edit_blood'])->name('edit_blood');
Route::get('/blood_group_create',[AdminController::class,'create_blood_group'])->name('blood_group_create');
Route::post('/blood_group_update/{id}',[AdminController::class,'blood_update'])->name('blood_group_update');
Route::post('/blood_group_store',[AdminController::class,'store_blood_group'])->name('blood_group_store');
Route::get('/blood_group_delete/{id}',[AdminController::class,'delete_blood_group'])->name('blood_group_delete');

// page
Route::get('/delete_pages/{id}',[AdminController::class,'delete_pages'])->name('delete_pages');
Route::get('/list_pages',[AdminController::class,'list_pages'])->name('list_pages');
Route::get('/create_pages',[AdminController::class,'create_pages'])->name('create_pages');
Route::get('/edit_pages/{id}',[AdminController::class,'edit_pages'])->name('edit_pages');
Route::post('/update_pages/{id}',[AdminController::class,'update_pages'])->name('update_pages');
Route::post('/store_pages',[AdminController::class,'page_store'])->name('store_pages');
// volunteers
Route::get('/list_valunteers',[AdminController::class,'list_val'])->name('list_valunteers');
Route::get('/create_valunteers',[AdminController::class,'create_valunteers'])->name('create_valunteers');
Route::post('/store_valunteers',[AdminController::class,'store_valunteers'])->name('store_valunteers');

// Route::get('/admin_login_index',[AdminController::class,'Admin_index'])->name('Admin_index');
Route::get('/city_delete/{id}',[AdminController::class,'delete'])->name('city_delete');
Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard');



// Route::get('admin_dashboard',[HomeController::class,'dashboard_index'])->name('dashboard_index')->middleware('auth');

// Route::get('/home', [HomeController::class, 'dashboard_index'])->name('admin_dashboard');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contact',[EbloodController::class,'contact'])->name('contact');
Route::get('/why_donor',[EbloodController::class,'why_donor'])->name('why_donor');
Route::get('/become_donor',[EbloodController::class,'become_donor'])->name('become_donor');
Route::get('/about',[EbloodController::class,'about'])->name('about');
Route::post('/edonor_store',[EbloodController::class,'edonor_store'])->name('edonor_store');
Route::post('/send_messge',[EbloodController::class,'send_messge'])->name('send_messge');



Route::get('/login_donor',[ LoginController::class,'logins_donor'])->name('login_donor');
Route::Post('/register_donor_store',[ RegisterController::class,'register_donor_store'])->name('register_donor_store');

Route::get('/register_donor',[ RegisterController::class,'register_donor'])->name('register_donor');
Route::get('/admin_login_index',[ LoginController::class,'admin_login_index'])->name('admin_login_index');
Route::post('/admin_login',[ LoginController::class,'admin_login'])->name('admin_login');
// Route::get('/admin_login',[ LoginController::class,'admin_login'])->name('admin_login');


Route::post('logout', [AdminController::class, 'logout'])->name('logout');
// Route::get('admin_dashboard',[HomeController::class,'dashboard_index'])->name('dashboard_index')->middleware('auth');



// Route::group(['middleware' => 'prevent-back-history'],function(){
	Auth::routes();
    // Route::get('admin_dashboard',[HomeController::class,'dashboard_index'])->name('dashboard_index')->middleware('auth');

	
// });

Route::post('contact_us', [EbloodController::class, 'contact_us'])->name('contact_us.store');
