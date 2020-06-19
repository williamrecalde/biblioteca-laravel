<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
class TableRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ejecutar antes el siguiente comando : composer dump-autoload
        $roles =[
            'administrador',
            'editor',
            'lector',
            'invitado',
            'supervisor'
        ];

        foreach($roles as $key => $rol){
            DB::table('rol')->insert([
                'nombre'=>$rol,
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
