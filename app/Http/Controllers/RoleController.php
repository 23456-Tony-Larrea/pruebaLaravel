<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function index()
    {
        //Method GET
        return $rol = Role::all();
    }

    public function store(Request $request)
    {
        //Method POST
        $rol = Role::create($request->all());

        return $rol;
    }

    public function update(Request $request,  $id)
    {
        //Method PATCH
        $rol = Role::find($id);
        
        $rol-> description =$request-> get("description");

        $rol ->save();
        return $rol;
    }

 
    public function destroy( $id)
    {
        //Method DELETE
        $rol = Role::find($id);
        $rol->delete();


        return "eliminado con exito!";
    }
}