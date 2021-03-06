<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'edit']);
        Permission::create(['name' => 'create']);
        Permission::create(['name' => 'god']);

        // create roles and assign created permissions

        $role = Role::create(['name' => 'moderator']);
        $role->givePermissionTo(['edit', 'create']);

        $role = Role::create(['name' => 'staff'])
            ->givePermissionTo('create');

        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());
    }
}
