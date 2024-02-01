<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * Super admin role that is the highest role
         */
        $superAdmin = Role::create(['name' => 'Super Admin']);
        $superAdmin->givePermissionTo([
            'all'
        ]);

        /**
         * Admin role, second highest role
         */
        $admin = Role::create(['name' => 'Admin']);
        $admin->givePermissionTo([
            'view articles',
            'create articles',
            'edit articles',
            'delete articles',

            'view media',
            'create media',
            'edit media',
            'delete media',

            'view pages',
            'create pages',
            'edit pages',
            'delete pages',
            
            'create comments',
            'moderate comments',

            'view frontend',
            'edit frontend',

            'view users',
            'edit users',
            'delete users',
            'delete super users',

            'view statistics',

            'view modules',
            'configure modules',

            'view backup',
            'restore backup',
            'create backup',
            'delete backup',
            'configure backup',

            'view update',
            'run update',
            'rollback update',

            'view site settings',
            'configure site settings',

            'view technical site settings',
            'configure technical site settings',

            'view logs',
            'clear logs',
        ]);

        /**
         * Editor role, third highest role
         */
        $editor = Role::create(['name' => 'Redacteur']);
        $editor->givePermissionTo([
            'view articles',
            'create articles',
            'edit articles',
            'delete articles',

            'view media',
            'create media',
            'edit media',
            'delete media',

            'view pages',
            'create pages',
            'edit pages',
            'delete pages',

            'create comments',
            'moderate comments',

            'view statistics'
        ]);

        /**
         * Visitor, External users role (mainly to post comments)
         */
        $visitor = Role::create(['name' => 'Bezoeker']);
        $visitor->givePermissionTo([
            'create comments',
        ]);
    }
}
