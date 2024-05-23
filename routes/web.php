<?php

use App\Http\Controllers\Backend\BranchController;
use App\Http\Controllers\Backend\CourseController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\ImageCategoryController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

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


Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::post('/admin-login', [LoginController::class, 'postLogin'])->name('admin-login');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard')->middleware('admin');


        Route::get('/user-index', [UserController::class, 'index'])->name('user.index');
        Route::get('/user-create', [UserController::class, 'create'])->name('user.create');
        Route::post('/user-store', [UserController::class, 'store'])->name('user.store');
        Route::get('/user-edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::put('/user-update/{id}', [UserController::class, 'update'])->name('user.update');
        Route::delete('/user-delete/{id}', [UserController::class, 'delete'])->name('user.delete');


        Route::get('/image-category', [ImageCategoryController::class, 'index'])->name('image.category');
        Route::get('/category-create', [ImageCategoryController::class, 'create'])->name('category.create');
        Route::post('/category-image', [ImageCategoryController::class, 'store'])->name('category.store');
        Route::get('/category-edit/{id}', [ImageCategoryController::class, 'edit'])->name('category.edit');
        Route::put('/category/update/{id}', [ImageCategoryController::class, 'update'])->name('category.update');
        Route::delete('/category/delete/{id}', [ImageCategoryController::class, 'delete'])->name('category.delete');


        Route::get('/gallery-index', [GalleryController::class, 'index'])->name('gallery.index');
        Route::get('/gallery-create', [GalleryController::class, 'create'])->name('gallery.create');
        Route::post('/upload-image', [GalleryController::class, 'store'])->name('gallery.upload');
        Route::get('/gallery-edit/{id}', [GalleryController::class, 'edit'])->name('gallery.edit');
        Route::put('/gallery/update/{id}', [GalleryController::class, 'update'])->name('gallery.update');
        Route::delete('/gallery/delete/{id}', [GalleryController::class, 'delete'])->name('gallery.delete');


        Route::get('/course-index', [CourseController::class, 'index'])->name('course.index');
        Route::get('/course-create', [CourseController::class, 'create'])->name('course.create');
        Route::post('/course-store', [CourseController::class, 'store'])->name('course.store');
        Route::get('/course-edit/{id}', [CourseController::class, 'edit'])->name('course.edit');
        Route::put('/course-update/{id}', [CourseController::class, 'update'])->name('course.update');
        Route::delete('course-delete/{id}', [CourseController::class, 'delete'])->name('course.delete');

        Route::get('/branch-create',[BranchController::class,'create'])->name('branch.create');
        Route::get('/branch-index',[BranchController::class,'index'])->name('branch.index');
        Route::post('/branch-store', [BranchController::class, 'store'])->name('branch.store');
        Route::get('/branch-edit/{id}',[BranchController::class,'edit'])->name('branch.edit');
        Route::put('/branch-update/{id}', [BranchController::class, 'update'])->name('branch.update');
        Route::delete('branch-delete/{id}', [BranchController::class, 'delete'])->name('branch.delete');

        Route::get('contact.index', [HomeController::class, 'contactindex'])->name('contact.index');



});




        Route::get('/',[HomeController::class,'home'])->name('home');
        Route::get('/about',[HomeController::class,'about'])->name('about');
        Route::get('/courses',[HomeController::class,'courses'])->name('courses');
        Route::get('/gallery',[HomeController::class,'gallery'])->name('gallery');
        Route::get('/our-franchise',[HomeController::class,'ourfranchise'])->name('our.franchise');
        Route::get('/nearme',[HomeController::class,'nearme'])->name('nearme');
        Route::get('/contact',[HomeController::class,'contact'])->name('contact');
        Route::get('/terms',[HomeController::class,'terms'])->name('terms');
        Route::get('/privacy',[HomeController::class,'privacy'])->name('privacy');
        Route::get('/faq',[HomeController::class,'faq'])->name('faq');
        Route::get('/singleclass/{slug}',[HomeController::class,'singleclass'])->name('singleclass');

          Route::post('/contact-store',[HomeController::class,'store'])->name('contact.store');

          // web.php
          Route::get('/search',[HomeController::class,'search'])->name('search');





