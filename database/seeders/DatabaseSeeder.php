<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
    // \App\Models\User::factory(10)->create();
    \App\Models\Customer::factory(10)->create()->each(function ($customer){

            // Seed the relation with one address
            $address =  \App\Models\CustomerAddress::factory()->make();
            $customer->address()->save($address);

            // Seed the relation with 5 purchases
            $purchases = \App\Models\CustomerPurchase::factory(5)->make();
            $customer->purchases()->saveMany($purchases);
    
    }
    );

    }
}
