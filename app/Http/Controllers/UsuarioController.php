<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Usuario::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fields = $this->validationUsuario($request);

        $usuario = Usuario::create($fields);

        return ['usuario' => $usuario];
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        return ['usuario' => $usuario];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        $fields = $this->validationUsuario($request);

        $usuario->update($fields);

        return ['usuario' => $usuario];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();

        return ['message' => 'Usuário removido com sucesso'];
    }

    protected function validationUsuario (Request $request)
    {
        return $request->validate([
                'nome' => 'required|max:255|string',
                'email' => 'required|email|string',
                'password' => 'required|max:10|string',
                'nivel' => 'required|integer|digits:1'
            ],
            [
                'required' => 'Campo :attribute é obrigatorio',
                'string' => 'Campo :attribute deve ser do tipo string',
                'integer' => 'Campo :attribute deve ser do tipo numero',
                'email' => 'Campo :attribute deve ser um email valido',
                'max' => 'Campo :attribute deve ser menor que :max',
                'digits' => 'Campo :attribute deve ser de :digits digitos',
            ]
        );
    }
}
