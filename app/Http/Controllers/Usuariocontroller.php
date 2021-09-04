<?php

namespace App\Http\Controllers;

use App\Http\Requests\usuariorequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Usuariocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $usuarios = User::paginate(15);

    return view('usuarios.index', [
        'usuarios' =>$usuarios
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \usuariorequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(usuariorequest $request)
    {
              User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
              ]);
              return Redirect()->route('usuarios.index')
              ->with('mensagem', 'Usuario criado com sucesso');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  User $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit(user $usuario)
    {
            return view('usuarios.edit', [
           'usuarios' => $usuario
       ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \usuariorequest  $request
     * @param  User $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(usuariorequest $request, User $usuario)
    {
             $usuario->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
          ]);
          return Redirect()->route('usuarios.index')
          ->with('mensagem', 'Usuario atualizado com sucesso');
}
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function destroy(User $usuario)
    {
        $usuario->delete();

        return Redirect()->route('usuarios.index')
          ->with('mensagem', 'Usuario excluido com sucesso');
    }
}



