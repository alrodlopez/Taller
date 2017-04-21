<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(PromotionsTypesSeeder::class);
        $this->call(PromotionsSeeder::class);
        $this->call(ProvidersSeeder::class);
        $this->call(ProductTypesSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(OrdersSeeder::class);

    }
}
