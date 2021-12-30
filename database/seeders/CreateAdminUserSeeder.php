<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Restu DS',
            'username' => 'Restuds',
            'email' => 'restudentas720@gmail.com',
            'password' => Hash::make('201802104'),
            'jenis_kelamin' => 'Laki-laki',
            'tanggal_lahir' => '2000-11-03'
        ]);
    
        $role = Role::create(['name' => 'Admin']);
     
        $permissions = Permission::pluck('id','id')->all();
   
        $role->syncPermissions($permissions);
     
        $user->assignRole([$role->id]);


        $user = User::create([
            'name' => 'Bale ZM',
            'username' => 'Balemz',
            'email' => 'restudentas801@gmail.com',
            'password' => Hash::make('restudentas25%'),
            'jenis_kelamin' => 'Laki-laki',
            'tanggal_lahir' => '2000-11-03'
        ]);
    
        Role::create(['name' => 'User']);
        Role::create(['name' => 'Purchasing']);
        Role::create(['name' => 'Finance']);
        $user->assignRole('User');
    }
}
