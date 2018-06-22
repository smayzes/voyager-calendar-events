<?php

namespace Codelabs\VoyagerCalendarEvents\Database\Seeds;

use TCG\Voyager\Models\Menu;
use Illuminate\Database\Seeder;
use TCG\Voyager\Models\MenuItem;

class MenuItemsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $menu = Menu::where('name', 'admin')->firstOrFail();

        $parentMenuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('voyagercalendarevents::seeders.menu_items.calendar'),
            'url'     => null,
            'route'   => null,
        ]);
        if (! $parentMenuItem->exists) {
            $parentMenuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-calendar',
                'color'      => null,
                'parent_id'  => null,
                'order'      => MenuItem::count() + 1,
            ])->save();
        }

        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('voyagercalendarevents::seeders.menu_items.venues'),
            'url'     => '/admin/venues',
            'route'   => null,
        ]);
        if (! $menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-shop',
                'color'      => null,
//                'parent_id'  => $parentMenuItem->id,
                'parent_id'  => null,
                'order'      => MenuItem::count() + 1,
            ])->save();
        }

        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('voyagercalendarevents::seeders.menu_items.groups'),
            'url'     => '/admin/groups',
            'route'   => null,
        ]);
        if (! $menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-home',
                'color'      => null,
                'parent_id'  => $parentMenuItem->id,
                'order'      => MenuItem::count() + 1,
            ])->save();
        }

        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('voyagercalendarevents::seeders.menu_items.events'),
            'url'     => '/admin/events',
            'route'   => null,
        ]);
        if (! $menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-calendar',
                'color'      => null,
                'parent_id'  => $parentMenuItem->id,
                'order'      => MenuItem::count() + 1,
            ])->save();
        }
    }
}
