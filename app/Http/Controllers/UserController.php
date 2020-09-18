<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserFormRequest;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    
    /**
    public function __construct()
    {
        $this->middleware('auth');
    }
     */

    public function index(Request $request)
    {
        if($request){
            $query = trim($request->get('search'));
            $users = User::where('name','LIKE','%'.$query.'%')->orWhere('email','LIKE','%'.$query.'%')->orderBy('id','asc')->paginate(10);
            return view('usuarios.index',['users'=> $users, 'search' => $query]);
        }else{
            $users = User::all();
            return view('usuarios/index', ['users' => $users]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::orderBy('name','asc')->get('name');
        return view('usuarios.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $usuario = User::create($request->all());
        $usuario = new User();
        $usuario->code =  request('code');
        $usuario->name =  request('name');
        $usuario->lastname =  request('lname');
        $usuario->email = request('email');
        $usuario->password =  Hash::make(request('password'));
        $usuario->save();
        $usuario->assignRole(request('rol'));

        return redirect('/usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // ->with('roles')->get()
        $user = User::findOrFail($id);
        return view('usuarios.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::orderBy('name','asc')->get('name');
        return view('usuarios.edit',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserFormRequest $request, $id)
    {
        $usuario = User::findOrFail($id);
        $usuario->name =  $request->get('name');
        $usuario->email = $request->get('email');
        $usuario->update();
        $usuario->SyncRoles(request('roles'));
        return redirect('/usuarios'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = user::findOrFail($id);
        $usuario->delete();
        return redirect('/usuarios');
    }
}
