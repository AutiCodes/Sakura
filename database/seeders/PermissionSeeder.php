<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * Super admin permissions
         */
        Permission::create(['name' => 'all']);

        /**
         * Articles permissions
         */
        Permission::create(['name' => 'view articles']);
        Permission::create(['name' => 'create articles']);
        Permission::create(['name' => 'edit articles']);
        Permission::create(['name' => 'delete articles']);

        /**
         * Media permissions
         */
        Permission::create(['name' => 'view media']);
        Permission::create(['name' => 'create media']);
        Permission::create(['name' => 'edit media']);
        Permission::create(['name' => 'delete media']);

        /**
         * Pages permissions
         */
        Permission::create(['name' => 'view pages']);
        Permission::create(['name' => 'create pages']);
        Permission::create(['name' => 'edit pages']);
        Permission::create(['name' => 'delete pages']);

        /**
         * Comments permissions
         */
        Permission::create(['name' => 'create comments']);
        Permission::create(['name' => 'moderate comments']);

        /**
         * Website frontend permissions
         */
        Permission::create(['name' => 'view frontend']);
        Permission::create(['name' => 'edit frontend']);

        /**
         * Users permissions
         */
        Permission::create(['name' => 'view users']);
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'edit users']);
        Permission::create(['name' => 'delete users']);
        Permission::create(['name' => 'delete super users']);

        /**
         * Statistics permissions
         */
        Permission::create(['name' => 'view statistics']);

        /**
         * Module permissions
         */
        Permission::create(['name' => 'view modules']);
        Permission::create(['name' => 'configure modules']);

        /**
         * Backup permissions
         */
        Permission::create(['name' => 'view backup']);
        Permission::create(['name' => 'restore backup']);
        Permission::create(['name' => 'create backup']);
        Permission::create(['name' => 'delete backup']);
        Permission::create(['name' => 'configure backup']);

        /**
         * Update permissions
         */
        Permission::create(['name' => 'view update']);
        Permission::create(['name' => 'run update']);
        Permission::create(['name' => 'rollback update']);

        /**
         * Site settings permissions
         */
        Permission::create(['name' => 'view site settings']);
        Permission::create(['name' => 'configure site settings']);

        /**
         * Technical site settings permissions
         */
        Permission::create(['name' => 'view technical site settings']);
        Permission::create(['name' => 'configure technical site settings']);

        /**
         * Logs permissions
         */
        Permission::create(['name' => 'view logs']);
        Permission::create(['name' => 'clear logs']);
    }
}
