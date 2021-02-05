<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{

    public function index()
    {
        //Method GET
        return $person = People::all();
    }

    
    public function store(Request $request)
    {
        //Method POST
        $person = People::create($request->all());

        return $person;
    }

    public function update(Request $request,$id)
    {
        //Method PATCH
        $person = People::find($id);

        $person-> userName =$request-> get("userName");
        $person-> fullName =$request-> get("fullName");
        $person-> email =$request-> get("email");
        $person-> cellphone =$request-> get("cellphone");
        $person-> age =$request-> get("age");
        $person-> dateBorn =$request-> get("dateBorn");

        $person ->save();
        return $person;
    }

    
    public function destroy( $id)
    {
        //Method DELETE
        $person = People::find($id);
        $person->delete();


        return "eliminado con exito !";
    }
}