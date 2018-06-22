<?php

namespace Codelabs\VoyagerCalendarEvents\Database\Seeds;

use Codelabs\VoyagerCalendarEvents\Models\Event;
use Codelabs\VoyagerCalendarEvents\Models\Group;
use Codelabs\VoyagerCalendarEvents\Models\Venue;
use Codelabs\VoyagerCalendarEvents\Policies\EventPolicy;
use Codelabs\VoyagerCalendarEvents\Policies\GroupPolicy;
use Codelabs\VoyagerCalendarEvents\Policies\VenuePolicy;
use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = DataType::firstOrNew(['slug' => 'events']);
        if (! $dataType->exists) {
            $dataType->fill([
                'name'                  => 'Events',
                'display_name_singular' => __('voyagercalendarevents::seeders.data_types.calendar-events.singular'),
                'display_name_plural'   => __('voyagercalendarevents::seeders.data_types.calendar-events.plural'),
                'icon'                  => 'voyager-calendar',
                'model_name'            => Event::class,
                'policy_name'           => EventPolicy::class,
                'controller'            => null,
                'generate_permissions'  => 1,
                'server_side'           => 1,
                'description'           => null,
            ])->save();
        }

        $dataType = DataType::firstOrNew(['slug' => 'groups']);
        if (! $dataType->exists) {
            $dataType->fill([
                'name'                  => 'Groups',
                'display_name_singular' => __('voyagercalendarevents::seeders.data_types.calendar-groups.singular'),
                'display_name_plural'   => __('voyagercalendarevents::seeders.data_types.calendar-groups.plural'),
                'icon'                  => 'voyager-home',
                'model_name'            => Group::class,
                'policy_name'           => GroupPolicy::class,
                'controller'            => null,
                'generate_permissions'  => 1,
                'server_side'           => 1,
                'description'           => null,
            ])->save();
        }

        $dataType = DataType::firstOrNew(['slug' => 'venues']);
        if (! $dataType->exists) {
            $dataType->fill([
                'name'                  => 'Venues',
                'display_name_singular' => __('voyagercalendarevents::seeders.data_types.calendar-venues.singular'),
                'display_name_plural'   => __('voyagercalendarevents::seeders.data_types.calendar-venues.plural'),
                'icon'                  => 'voyager-shop',
                'model_name'            => Venue::class,
                'policy_name'           => VenuePolicy::class,
                'controller'            => null,
                'generate_permissions'  => 1,
                'server_side'           => 1,
                'description'           => null,
            ])->save();
        }
    }
}
