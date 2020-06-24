<?php

use App\Models\Admin\Permiso;
use Illuminate\Database\Seeder;

class TablePermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Permiso::class,50)->create();
    }
}
