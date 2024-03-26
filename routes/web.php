<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HOMEController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\teamController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CalenderController;
use App\Http\Controllers\projectsController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\downloadCvController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\SkillsTypeController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\Service_visionController;
use App\Http\Controllers\servicedetailsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::middleware('Visit')->group(function () {
Route::get('/', [HOMEController::class,'index'])->name('home');
Route::get('/Portfolio', [PortfolioController::class,'index'])->name('Portfolio');
Route::get('/Portfolio/{id}', [PortfolioController::class, 'filter'])->name('filter');
Route::get('/about', [AboutController::class,'index'])->name('about');
Route::get('/Blog', [BlogController::class,'index'])->name('Blog');
Route::get('/Service', [ServiceController::class,'index'])->name('Service');
Route::get('/download-cv',[downloadCvController::class,'download'])->name('download.cv');
Route::get('/email', [EmailController::class, 'create']);
Route::post('/email', [EmailController::class, 'sendEmail'])->name('send.email');
});
// 
// Route::get('/dashboard', function () {
//     return view('pages.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
// 
Route::middleware('auth')->group(function () {
    Route::get('/delete-user', [ProfileController::class, 'delete_user'])->name('delete_user');
    Route::get('/update-password', [ProfileController::class, 'update_password'])->name('update_password');
    Route::get('/profile-details', [ProfileController::class, 'index'])->name('profile');
    Route::get('/connections', [ProfileController::class, 'connections'])->name('connections');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/visit-chart-data', [AdminController::class, 'getVisitChartData'])->name('visit-chart-data');

});



Route::resource('Articles', ArticleController::class);
Route::resource('Categories', CategorieController::class);
Route::resource('Skills-Types', SkillsTypeController::class);
Route::resource('Skills', SkillsController::class);
Route::resource('Tags', TagsController::class);
Route::resource('servic-edetails', servicedetailsController::class);
Route::resource('Testimonial', TestimonialController::class);
Route::resource('Contacts', ContactController::class);
Route::resource('Educations', EducationController::class);
Route::resource('Experiences', ExperienceController::class);
Route::resource('teams', teamController::class);
Route::resource('Service_vision', Service_visionController::class);
Route::resource('Settings', SettingController::class);
Route::resource('projects', projectsController::class);
Route::resource('Members', MembersController::class);



