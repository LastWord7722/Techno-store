<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        Brand::factory(15)->create();
        Category::factory(18)->create();
        Product::factory(100)->create();
        Role::factory(1)->create();
        Role::factory()->create([
            'title' => 'admin',

        ]);

         User::factory()->create([
             'name' => 'Mark',
             'email' => 'lastwordmark@gmail.com',
             'password' => Hash::make('1111'),
             'role_id' => 2,
         ]);
    }
}
