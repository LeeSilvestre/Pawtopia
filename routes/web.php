<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Use App\Http\Controllers\FoodController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BillStatusController;
use App\Http\Controllers\BillDetailsController;

Route::prefix('api')->group(function () {

    //User
    Route::get('/users', [UserController::class, 'allUsers']);
    Route::get('/users/{email}', [UserController::class, 'showAUser']);
    Route::post('/users', [UserController::class, 'createAccount']);

    //Foods
    Route::get('/foods', [FoodController::class, 'allFoods']);
    Route::get('/foods/{id}', [FoodController::class, 'showAFood']);
    Route::post('/foods', [FoodController::class, 'createFood']);
    Route::put('/foods/{id}', [FoodController::class, 'updateFoodP']);
    Route::delete('/foods/{id}', [FoodController::class, 'deleteFoodP']);

    //Cart
    Route::post('/cartItem', [CartController::class, 'addItems']);
    Route::get('/cartItem/{user_id}/{food_id}', [CartController::class, 'getItem']);
    Route::get('/cartItem/{id}', [CartController::class, 'allItems']);
    Route::put('/cartItem', [CartController::class, 'updateItem']);
    Route::delete('/cartItem/{user_id}/{food_id}', [CartController::class, 'deleteItem']);
    Route::delete('/cartItem/{id}', [CartController::class, 'deleteItems']);

    //Billstatus
    Route::get('/billstatus/new', [BillStatusController::class, 'showNewestStatusId']);
    Route::post('/billstatus', [BillStatusController::class, 'createBillStatus']);
    Route::get('/billstatus/user/{id}', [BillStatusController::class, 'getAllBillsByUser']);
    Route::get('/billstatus/bill/{id}', [BillStatusController::class, 'getAllBillsByBill']);
    Route::get('/billstatus', [BillStatusController::class, 'getAllBills']);
    Route::put('/billstatus/{id}', [BillStatusController::class, 'updateBillStatus']);
    Route::put('/billstatus/paid/{id}', [BillStatusController::class, 'updateBillPaid']);
    Route::put('/billstatus/cancel/{id}', [BillStatusController::class, 'cancelBillStatus']);

    //Billdetails
    Route::post('/billdetails', [BillDetailsController::class, 'createBillDetails']);
    Route::get('/billdetails/{id}', [BillDetailsController::class, 'getBillDetailsById']);
});
