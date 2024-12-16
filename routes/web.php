<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegistrationController;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::middleware(['guest', 'back'])->group(function () {
    Route::get('signup', [AuthController::class, 'showRegistrationForm'])->name('signup');
    Route::post('signup', [AuthController::class, 'register'])->name('signup.submit');
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login_authenticate'])->name('login.post');
    

});

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/categoryinfo', [PageController::class, 'categories'])->name('categories');
Route::get('/judging', [PageController::class, 'judging'])->name('judging');
Route::get('/contactus', [PageController::class, 'contactus'])->name('contactus');
Route::get('/prizes', [PageController::class, 'prizes'])->name('prizes');
Route::get('/fee', [PageController::class, 'fee'])->name('fee');


// Rute Home untuk Admin dan User
Route::middleware(['auth', 'back'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['auth', 'role:admin', 'back'])->group(function () {
    Route::get('/admin/registered', [AdminController::class, 'registeredTeams'])->name('admin.registered');
    Route::get('/admin/verified', [AdminController::class, 'verifiedTeams'])->name('admin.home');
    Route::post('/admin/verify-team/{id}', [AdminController::class, 'verifyTeam'])->name('admin.verify-team');
    Route::resource('categories', CategoryController::class);
    Route::get('/admin/registered/{id}/edit', [AdminController::class, 'edit'])->name('admin.registered.edit');
    Route::put('/admin/registered/{id}', [AdminController::class, 'update'])->name('admin.registered.update');
    Route::delete('/admin/registered/{id}', [AdminController::class, 'destroy'])->name('admin.registered.destroy');
    Route::get('admin/teams/{team_id}/members', [MemberController::class, 'showMembers'])->name('admin.members.show');
    Route::get('/admin/teams/{team_id}/members/create', [MemberController::class, 'create'])->name('admin.members.create');
    Route::post('/admin/teams/{team_id}/members', [MemberController::class, 'store'])->name('admin.members.store');
    Route::get('/admin/teams/{team_id}/members/{id}/edit', [MemberController::class, 'edit'])->name('admin.members.edit');
    Route::put('/admin/teams/{team_id}/members/{id}', [MemberController::class, 'update'])->name('admin.members.update');
    Route::delete('admin/teams/{team_id}/members/{id}', [MemberController::class, 'destroy'])->name('admin.members.delete');

});

Route::middleware(['auth', 'role:user', 'back'])->group(function () {
    Route::get('/user/homeuser', [  UserController::class, 'home'])->name('user.home');
    Route::get('/user/faq', [  UserController::class, 'faq'])->name('user.faq');
    Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');
    Route::get('/teams/create', [TeamController::class, 'create'])->name('teams.create');
    Route::post('/teams', [TeamController::class, 'store'])->name('teams.store');
    Route::get('teams/{team}/categories/{category}/members', [TeamController::class, 'show'])->name('teams.show'); // View team details
    Route::get('teams/{teamId}/categories/{categoryId}/add-member', [TeamController::class, 'showAddMemberForm'])->name('teams.add-member');
    Route::get('/teams/{teamId}/category/{categoryId}', [TeamController::class, 'showMembersByCategory'])->name('teams.showByCategory');
    // Route for showing the Add Member form for a specific category in a team

    // Route to handle the form submission (adding the member)
    Route::post('/teams/{teamId}/categories/{categoryId}/add', [TeamController::class, 'storeMember'])->name('teams.storeMember');
// Store new member
    




});

// Route::middleware(['guest'])->group(function () {
//     Route::get('/login', [LoginController::class, 'index'])->name('login');
//     Route::post('/login', [LoginController::class, 'login']);

// });

// Route::get('/home', function (){
//     return redirect(('/admin'));
// });

// Route::middleware(['auth'])->group(function () {   
//     Route::get('/index', [AdminController::class, 'index']);
//     Route::get('/user/homeuser', [AdminController::class, 'user'])->middleware('role:user');
//     Route::get('/admin/homeregistration', [AdminController::class, 'admin'])->middleware('role:admin');

//     Route::get('/logout', [LoginController::class, 'actionlogout']);


// });



