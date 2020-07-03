<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionRolRequest;
use App\Models\Admin\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Rol::orderBy('id')->get();
        return view('admin.rol.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rol.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidacionRolRequest $request)
    {
        Rol::create($request->all());
        return redirect('admin/rol')->with('mensaje','Rol creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd("prueba $id");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Rol::findOrFail($id);
        return view('admin.rol.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidacionRolRequest $request, $id)
    {
        Rol::findOrFail($id)->update($request->all());
        return redirect('admin/rol')->with('mensaje','Rol actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        //dd('eliminar ',$id);
        if($request->ajax()){
            if(Rol::destroy($id)){
                return response()->json(['mensaje'=>'ok']);
            }
            else{
                return response()->json(['mensaje'=>'ng']);
            }
        }
        else{
            abort(404);
        }

    }
}
