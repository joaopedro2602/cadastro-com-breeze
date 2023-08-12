<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\cadastro;

class CadastroController extends Controller
{
    public function list()
    {
        $cadastros = cadastro::get();
        return view('listar-cliente', [
            'cadastros' => $cadastros,
        ]);
    }

    public function create()
    {
        return view('cadastrar-cliente');
    }

    public function store(Request $request)
    {
        cadastro::create($request->all());

        return redirect()->route('cliente.listar');
    }

    public function destroy(cadastro $cadastro)
    {
        $cadastro->delete();

        return redirect()->route('cliente.listar');
    }

    public function edit(cadastro $cadastro)
    {
        return view('editar-cliente', [
            'cadastro' => $cadastro,
        ]);
    }


    public function update(Request $request, cadastro $cadastro)
    {
        $cadastro->update($request->all());

        return redirect()->route('cliente.listar');
    }
}
