<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'anggota-list',
            'anggota-create',
            'anggota-edit',
            'anggota-delete',
            'sapi-list',
            'sapi-create',
            'sapi-edit',
            'sapi-delete'
        ];

        foreach ($p as $x) {
            Permission::create(['name' => $x]);
        }
    }
}
