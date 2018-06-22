<?php

namespace Codelabs\VoyagerCalendarEvents\Database\Seeds;

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
        $this->call(DataTypesTableSeeder::class);
        $this->call(DataRowsGroupsTableSeeder::class);
        $this->call(DataRowsVenuesTableSeeder::class);
        $this->call(DataRowsEventsTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
    }
}
