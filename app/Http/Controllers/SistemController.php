<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\UsuariosModel;

class SistemController extends Controller
{
    public function entrada(){
            return view('entrada');
    }
}
