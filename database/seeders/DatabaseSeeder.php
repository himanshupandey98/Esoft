<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Company;

use App\Models\Employee;
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

        Admin::create(['email'=>'admin@admin.com','password'=>'password']);
        
        Company::factory(4)->create();

        Employee::factory(3)->create(['company_id'=>'1']);
        Employee::factory(2)->create(['company_id'=>'2']);
        Employee::factory(5)->create(['company_id'=>'3']);



    }
}
