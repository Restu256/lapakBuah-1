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
            'name' => 'IQBAL ZM',
            'username' => 'iqbalmz',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
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
            'email' => 'user@gmail.com',
            'password' => Hash::make('user'),
            'jenis_kelamin' => 'Laki-laki',
            'tanggal_lahir' => '2000-11-03'
        ]);
    
        Role::create(['name' => 'User']);
        $user->assignRole('User');
    }
}
