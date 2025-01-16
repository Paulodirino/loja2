<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
<<<<<<< HEAD
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    private $permissions = [
=======

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

//use Database\Seeders\ProductSeeder;

class DatabaseSeeder extends Seeder
{
    private $permissions =[
>>>>>>> ef35e66832508c1ac775cc42ec25220279364dd7
        'product-list',
        'product-create',
        'product-edit',
        'product-delete',
    ];
<<<<<<< HEAD

    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
=======
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
>>>>>>> ef35e66832508c1ac775cc42ec25220279364dd7
        $this->call([ProductSeeder::class]);
        $this->call([UserSeeder::class]);

        foreach ($this->permissions as $permission) {
<<<<<<< HEAD
            Permission::create(['name' => $permission]);
        }

        $adminRole = Role::create(['name' => 'Administrator']);
        $managerRole = Role::create(['name' => 'Manager']);

        foreach( Permission::all() as $permission){
            $permission->assignRole($adminRole);
        }

        $permissionListProduct = Permission::findByName('product-list');
        $permissionListProduct->assignRole($managerRole);

=======
             Permission::create(['name' => $permission]);
             }
        $adminRole = Role::create(['name' => 'Administrator']);
        $managerRole = Role::create(['name' => 'Manager']);
             foreach( Permission::all() as $permission){
        $permission->assignRole($adminRole);
             }
        $permissionListProduct = Permission::findByName('product-list');
        $permissionListProduct->assignRole($managerRole);
            
>>>>>>> ef35e66832508c1ac775cc42ec25220279364dd7
        $adminUser = User::where('email', '=', 'usera@example.com')->first();
        $adminUser->assignRole('Administrator');
    }
}
