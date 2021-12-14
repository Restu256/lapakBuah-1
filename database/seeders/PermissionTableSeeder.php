<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'route-list',
            'route-create',
            'route-edit',
            'route-delete',
            'category-list',
            'category-create',
            'category-edit',
            'category-delete',
            'blog-list',
            'blog-create',
            'blog-edit',
            'blog-delete',
            'image-list',
            'image-create',
            'image-edit',
            'image-delete',
            'imageproduct-list',
            'imageproduct-create',
            'imageproduct-edit',
            'imageproduct-delete',
            'product-list',
            'product-create',
            'product-edit',
            'product-delete',
            'supplier-list',
            'supplier-create',
            'supplier-edit',
            'supplier-delete',
         ];
      
         foreach ($permissions as $permission) {
              Permission::create(['name' => $permission]);
         }
    }
}
