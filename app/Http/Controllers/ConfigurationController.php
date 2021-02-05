<?php

namespace App\Http\Controllers;

use App\Models\Configuration;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{

    public function index()
    {
        //Method GET
        return $confi = Configuration::all();
    }


    public function store(Request $request)
    {
        //Method POST
        $confi = Configuration::create($request->all());

        return $confi;
    }


    public function update(Request $request,$id)
    {
        //Method PATCH
        $confi = Configuration::find($id);

        $confi-> language =$request-> get("language");
        $confi-> country =$request-> get("country");
        $confi-> state =$request-> get("state");

        $conf ->save();
        return $conf;
    }

  
    public function destroy($id)
    {
               //Method DELETE
               $conf = Configuration::find($id);
               $conf->delete();
       
       
               return "elimnado con exito !";
    }
}