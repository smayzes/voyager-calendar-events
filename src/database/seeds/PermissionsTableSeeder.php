<?php

namespace Codelabs\VoyagerCalendarEvents\Database\Seeds;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        Permission::generateFor('events');
        Permission::generateFor('venues');
        Permission::generateFor('groups');
    }
}
