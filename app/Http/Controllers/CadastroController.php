<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\cadastro;

class CadastroController extends Controller
{
    public function create(){
        return view('cadastrar-cliente');
    }

    public function store(Request $request){
        cadastro::create($request->all());

        return view('dashboard');
    }
}
