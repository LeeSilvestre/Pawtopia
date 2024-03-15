<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cart;
use App\Models\Customer;

class CartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $customers = Customer::all();

        $customers->each(function ($customer) {
            $cartCount = rand(1, 5); 
            Cart::factory()->count($cartCount)->create(['user_id' => $customer->id]);
        });
    }
}
