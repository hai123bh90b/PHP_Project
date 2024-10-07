<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\RelationController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NewsController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/send-email' , [MailController::class , 'sendEmail']);


Route::view('login' , 'login')->name('login');
Route::post('loginMatch' , [UserController::class, 'login'])->name('loginMatch');
Route::view('register' , 'register')->name('register');
Route::post('registerSave', [UserController::class, 'register'])->name('registerSave');


Route::middleware('auth')->group(function ()
{
    Route::middleware('user-access:admin')->group(function()
    {
        Route::get('/employees/import-export', [EmployeeController::class, 'showImportExportPage'])->name('employees.importExport');
        Route::post('/employees/import', [EmployeeController::class, 'import'])->name('employees.import');
        Route::get('/employees/export', [EmployeeController::class, 'export'])->name('employees.export');
        Route::get('/employees/list', [EmployeeController::class, 'showEmployeeList'])->name('employees.list');

        Route::get('/students', [StudentController::class, 'index'])->name('students.index');
        Route::resource('users', UserController::class);

        Route::get('/dashboard', [UserController::class, 'dashboardPage'])->name('dashboard'); 

        Route::resource('members', MemberController::class);

        Route::resource('groups', GroupController::class);

        Route::get('/relation', [RelationController::class, 'index'])->name('relation.index');
        Route::resource('student' , StudentController::class);

    });


    Route::middleware('user-access:user')->group(function () {

        Route::post('/fetch-news', [NewsController::class, 'fetchNews'])->name('fetchNews');
        Route::get('/display-news', [NewsController::class, 'displayNews'])->name('displayNews');
        
        Route::get('/frontend/app', [FrontendController::class, 'index'])->name('frontend.app');

        Route::get('/student-records', [StudentController::class, 'showStudents'])->name('frontend.student.records');


    });

    Route::get('/logout', [UserController::class, 'logout'])->name('logout');

});



