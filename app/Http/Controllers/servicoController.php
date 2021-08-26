<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicoRiquest;
use App\Models\servico;
use Illuminate\Http\Riquest;
use Illuminate\Support\Facades\Redirect;

class servicoController extends Controller
{
    public function index()
    {
        $servicos = servico::paginate(10);


            return view('servicos.index')->with('servicos', $servicos);

    }

             public function create()
        {
            return view('servicos.create');
        }

            public function store(ServicoRiquest $riquest)
    {
            $dados = $riquest->except('_token');


           servico::create($dados);

           return Redirect()->route('servicos.index');

        }

           public function edit(int $id)
           {
               $servico = servico::findOrFail($id);

               return view('servicos.edit')->with('servico', $servico);
           }
public function update(int $id, ServicoRiquest $request)
{
    $dados = $request->except(['_token','_method']);

    $servico = servico::findOrFail($id);

    $servico->update($dados);

    return redirect()->route('servicos.index');
}
  }

