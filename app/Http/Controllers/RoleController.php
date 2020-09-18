<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request){
            $query = trim($request->get('search'));
            $roles = Role::where('name','LIKE','%'.$query.'%')->orderBy('id','asc')->paginate(5);
            return view('roles.index',compact('roles','query'));
        }else{
            $roles = Role::orderBy('id','asc')->paginate(5);
            return view('roles.index', compact('roles'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $permisos = Permission::orderBy('name','asc')->get();
        return view('roles.create',compact('permisos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $rol = Role::create(['name' => request('name'),'description' => request('description')]);
        $rol->givePermissionTo(request()->get('permisos'));
        return redirect()->route('roles.index')->withSuccess('Rol creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $rol = Role::findOrFail($id)->with('permissions')->get();
        return view('roles.show',compact('rol'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $rol = Role::findOrFail($id)->with('permissions')->get();
        $permisos = Permission::orderBy('name','asc')->get();
        return view('roles.edit',compact('rol','permisos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $rol = Role::findOrFail($id);
        $rol->update(request()->all());
        $rol->SyncPermissions(request('permissions'));
        return redirect()->route('roles.index')->withSuccess('Rol Modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $rol = Role::findOrFail($id);
        $rol->delete();
        return redirect()->route('roles.index')->withSuccess('Rol Eliminado Correctamente');
    }
}
