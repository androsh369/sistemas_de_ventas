<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProviderController;


Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-Login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signuot');



Route ::get('/categories', [CategoryController::class, 'index'])
->name('categories.index');

Route ::get('/categories/create', [CategoryController::class, 'create'])
->name('categories.create');

Route ::post('/categories/create', [CategoryController::class, 'store'])
->name('categories.create');

Route ::get('/categories/edit/{category}', [CategoryController::class, 'edit'])
->name('categories.edit');

Route ::post('/categories/edit/{category}', [CategoryController::class, 'update'])
->name('categories.edit');

Route ::post('/categories/delete/{category}', [CategoryController::class, 'destroy'])
->name('categories.delete');


Route ::get('/products', [ProductController::class, 'index'])
->name('products.index');

Route ::get('/products/create', [ProductController::class, 'create'])
->name('products.create');

Route ::post('/products/create', [ProductController::class, 'store'])
->name('products.create');

Route ::get('/products/edit/{product}', [ProductController::class, 'edit'])
->name('products.edit');

Route ::post('/products/edit/{product}', [ProductController::class, 'update'])
->name('products.edit');

Route ::post('/products/delete/{product}', [ProductController::class, 'destroy'])
->name('products.delete');


Route ::get('/departments', [departmentController::class, 'index'])
->name('departments.index');

Route ::get('/departments/create', [departmentController::class, 'create'])
->name('departments.create');

Route ::post('/departments/create', [departmentController::class, 'store'])
->name('departments.create');

Route ::get('/departments/edit/{department}', [departmentController::class, 'edit'])
->name('departments.edit');

Route ::post('/departments/edit/{department}', [departmentController::class, 'update'])
->name('departments.edit');

Route ::post('/departments/delete/{department}', [departmentController::class, 'destroy'])
->name('departments.delete');


Route ::get('/cities', [CityController::class, 'index'])
->name('cities.index');

Route ::get('/cities/create', [CityController::class, 'create'])
->name('cities.create');

Route ::post('/cities/create', [CityController::class, 'store'])
->name('cities.create');

Route ::get('/cities/edit/{city}', [CityController::class, 'edit'])
->name('cities.edit');

Route ::post('/cities/edit/{city}', [CityController::class, 'update'])
->name('cities.edit');

Route ::post('/cities/delete/{city}', [CityController::class, 'destroy'])
->name('cities.delete');


Route ::get('/employees', [EmployeeController::class, 'index'])
->name('employees.index');

Route ::get('/employees/create', [EmployeeController::class, 'create'])
->name('employees.create');

Route ::post('/employees/create', [EmployeeController::class, 'store'])
->name('employees.create');

Route ::get('/employees/edit/{employee}', [EmployeeController::class, 'edit'])
->name('employees.edit');

Route ::post('/employees/edit/{employee}', [EmployeeController::class, 'update'])
->name('employees.edit');

Route ::post('/employees/delete/{employee}', [EmployeeController::class, 'destroy'])
->name('employees.delete');


Route ::get('/clients', [ClientController::class, 'index'])
->name('clients.index');

Route ::get('/clients/create', [ClientController::class, 'create'])
->name('clients.create');

Route ::post('/clients/create', [ClientController::class, 'store'])
->name('clients.create');

Route ::get('/clients/edit/{client}', [ClientController::class, 'edit'])
->name('clients.edit');

Route ::post('/clients/edit/{client}', [ClientController::class, 'update'])
->name('clients.edit');

Route ::post('/clients/delete/{client}', [ClientController::class, 'destroy'])
->name('clients.delete');


Route ::get('/providers', [ProviderController::class, 'index'])
->name('providers.index');

Route ::get('/providers/create', [ProviderController::class, 'create'])
->name('providers.create');

Route ::post('/providers/create', [ProviderController::class, 'store'])
->name('providers.create');

Route ::get('/providers/edit/{provider}', [ProviderController::class, 'edit'])
->name('providers.edit');

Route ::post('/providers/edit/{provider}', [ProviderController::class, 'update'])
->name('providers.edit');

Route ::post('/providers/delete/{provider}', [ProviderController::class, 'destroy'])
->name('providers.delete');
