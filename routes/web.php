<?php

use Illuminate\Support\Facades\Route;
use App\Models\Customer;
use App\Models\Supply;
use App\Models\Cart;

//GET ///////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/customers', function () {
    $customers = Customer::all();
    return $customers;
});

Route::get('/supplies', function () {
    $supplies = Supply::all();
    return $supplies;
});

Route::get('/carts', function () {
    $carts = Cart::all();
    return $carts;
});

Route::get('/customers/{id}', function ($id) {
    $customer = Customer::findOrFail($id);
    return $customer;
});

Route::get('/supplies/{id}', function ($id) {
    $supply = Supply::findOrFail($id);
    return $supply;
});

Route::get('/carts/{id}', function ($id) {
    $cart = Cart::findOrFail($id);
    return $cart;
});


//POST //////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/carts/create', function (Request $request) {
    $item_qty = $request->query('item_qty');
    $supply_id = $request->query('supply_id');
    $cart = new Cart();
    $cart->item_qty = $item_qty;
    $cart->supply_id = $supply_id;
    $cart->save();
    return $cart;
});

Route::post('/carts/create', function (Request $request) {
    $item_qty = $request->input('item_qty');
    $supply_id = $request->input('supply_id');
    
    // Create a new Cart instance
    $cart = new Cart();
    $cart->item_qty = $item_qty;
    $cart->supply_id = $supply_id;
    $cart->save();
    
    return $cart;
});


//DELETE ////////////////////////////////////////////////////////////////////////////////////// DELETE E2 NAKSHIEEE /////

Route::get('/customers/delete/{id}', function ($id) {
    Customer::where('id', $id)->delete();
    return 'Customer deleted successfully';
});

Route::get('/supplies/delete/{id}', function ($id) {
    Supply::where('id', $id)->delete();
    return 'Supply deleted successfully';
});

Route::get('/carts/delete/{id}', function ($id) {
    Cart::where('id', $id)->delete();
    return 'Cart deleted successfully';
});

Route::delete('/customers/{id}', function ($id) {
    $customer = Customer::findOrFail($id);
    $customer->forceDelete();
    return 'Customer deleted successfully';
});

Route::delete('/supplies/{id}', function ($id) {
    $supply = Supply::findOrFail($id);
    $supply->forceDelete();
    return 'Supply deleted successfully';
});

Route::delete('/carts/{id}', function ($id) {
    $cart = Cart::findOrFail($id);
    $cart->forceDelete();
    return 'Cart deleted successfully';
});

//PUT //////////////////////////////////////////////////////////////////////// PUT E2 MHIEE ////////////

Route::get('/carts/update/{id}', function ($id) {
    $cart = Cart::find($id);
    $cart->item_qty = '100';
    $cart->save();
    return$cart;
});

Route::put('/customers/{id}', function ($id) {
    $customer = Customer::findOrFail($id);
    $customer->update(request()->all());
    return 'Customer updated successfully';
});

Route::put('/supplies/{id}', function ($id) {
    $supply = Supply::findOrFail($id);
    $supply->update(request()->all());
    return 'Supply updated successfully';
});

Route::put('/carts/{id}', function ($id) {
    $cart = Cart::findOrFail($id);
    $cart->update(request()->all());
    return 'Cart updated successfully';
});
