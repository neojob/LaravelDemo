<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        Role::create(['name'=>'admin']);
        Role::create(['name'=>'user']);
        Role::create(['name'=>'soc_user']);
    }
}
