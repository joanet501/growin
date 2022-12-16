<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function huertoUsuario(Request $request){


        $data['celda1'] = null;
        $data['celda2'] = null;
        $data['celda3'] = null;

        $data['celda4'] = null;
        $data['celda5'] = null;
        $data['celda6'] = null;

        $data['celda7'] = null;
        $data['celda8'] = null;
        $data['celda9'] = null;

        return view('jardin',$data);
    }

}
