<?php

namespace Codelabs\VoyagerCalendarEvents\Database\Seeds;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;

class DataRowsGroupsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = DataType::where('slug', 'groups')->firstOrFail();
        $dataRow = $this->dataRow($dataType, 'id');
        if (! $dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('voyagercalendarevents::seeders.data_rows.id'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => null,
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'unique_id');
        if (! $dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyagercalendarevents::seeders.data_rows.unique_id'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 0,
                'delete'       => 1,
                'details'      => null,
                'order'        => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'author_id');
        if (! $dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyagercalendarevents::seeders.data_rows.author'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 0,
                'delete'       => 1,
                'details'      => null,
                'order'        => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'name');
        if (! $dataRow->exists) {
            $dataRow->fill([
                'type'         => 'name',
                'display_name' => __('voyagercalendarevents::seeders.data_rows.name'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => null,
                'order'        => 4,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'url');
        if (! $dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyagercalendarevents::seeders.data_rows.url'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => null,
                'order'        => 5,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'image');
        if (! $dataRow->exists) {
            $dataRow->fill([
                'type'         => 'image',
                'display_name' => __('voyagercalendarevents::seeders.data_rows.group_image'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => json_encode([
                    'resize' => [
                        'width'  => '1000',
                        'height' => 'null',
                    ],
                    'quality'    => '70%',
                    'upsize'     => true,
                    'thumbnails' => [
                        [
                            'name'  => 'medium',
                            'scale' => '50%',
                        ],
                        [
                            'name'  => 'small',
                            'scale' => '25%',
                        ],
                        [
                            'name' => 'cropped',
                            'crop' => [
                                'width'  => '300',
                                'height' => '250',
                            ],
                        ],
                    ],
                ]),
                'order' => 6,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'status');
        if (! $dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => __('voyagercalendarevents::seeders.data_rows.status'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => json_encode([
                    'default' => 'DRAFT',
                    'options' => [
                        'PUBLISHED' => 'published',
                        'DRAFT'     => 'draft',
                        'PENDING'   => 'pending',
                    ],
                ]),
                'order' => 7,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'created_at');
        if (! $dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyagercalendarevents::seeders.data_rows.created_at'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => null,
                'order'        => 8,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'updated_at');
        if (! $dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyagercalendarevents::seeders.data_rows.updated_at'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => null,
                'order'        => 9,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'featured');
        if (! $dataRow->exists) {
            $dataRow->fill([
                'type'         => 'checkbox',
                'display_name' => __('voyagercalendarevents::seeders.data_rows.featured'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => null,
                'order'        => 10,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'groups_belongsto_user_relationship');
        if (! $dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => __('voyagercalendarevents::seeders.data_rows.author'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => json_encode([
                    'model' => config('voyagercalendarevents.users.model'),
                    'table' => 'users',
                    'type' => 'belongsTo',
                    'column' => 'author_id',
                    'key' => 'id',
                    'label' => 'name',
                    'pivot_table' => 'calendar_groups',
                    'pivot' => '0',
                    'taggable' => null,
                ]),
                'order'        => 11,
            ])->save();
        }
    }

    /**
     * Get the data row from type and field.
     *
     * @param $type
     * @param $field
     *
     * @return mixed
     */
    protected function dataRow($type, $field)
    {
        return DataRow::firstOrNew([
            'data_type_id' => $type->id,
            'field'        => $field,
        ]);
    }
}
