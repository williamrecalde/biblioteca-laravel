<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables(['rol','permiso']);
        $this->call(TableRolSeeder::class);
        $this->call(TablePermisoSeeder::class);
       
    }

    protected function truncateTables( array $tablas){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach( $tablas as $tabla){
            DB::table($tabla)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
