<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menu";
    protected $fillable = ['nombre','url','icono'];
    protected $guarded = ['id'];
    //public $timestamps = false;

    public function getHijos($padres, $line){
        $children =[];
        foreach( $padres as $line1){
            if($line['id'] == $line1['menu_id']){
                $children = array_merge($children,[array_merge($line1,['submenu' => $this->getHijos($padres,$line1)])]);
            }
        }

        return $children;

    }//fin de getHijos

    public function getPadres($front){
        if($front){
            return $this->whereHas('roles', function($query){
                $query->where('rol_id',session()->get('rol_id'))->orderBy('menu_id');
            })->where('estado',1)->orderBy('menu_id')->orderBy('menu')->get()->toArray();
        }else{
            return $this->orderBy('menu_id')->orderBy('orden')->get()->toArray();
        }
    }//fin de getPadres

    public static function getMenu($front = false){
        $menus = new Menu();
        $padres = $menus->getPadres($front);
        $menuAll =[];
        foreach($padres as $line){
            if($line['menu_id'] != 0)
                break;
            $item = [array_merge($line,['submenu'=>$menus->getHijos($padres, $line)])];
            $menuAll = array_merge($menuAll,$item);
        }

        return $menuAll;
    }


}
