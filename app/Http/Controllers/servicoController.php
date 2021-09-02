<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicoRiquest;
use App\Models\servico;
use Illuminate\Http\Riquest;
use Illuminate\Support\Facades\Redirect;

class servicoController extends Controller
{
    /**
     * Lista os Serviços
     *
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $servicos = servico::paginate(10);


            return view('servicos.index')->with('servicos', $servicos);

    }
    /**
     * Mostra o Form Vazio
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
            public function create()
        {
            return view('servicos.create');
        }
        /**
         * Undocumented function
         *
         * @param ServicoRiquest $riquest
         * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
         */

            public function store(ServicoRiquest $riquest)
    {
            $dados = $riquest->except('_token');


           servico::create($dados);

           return Redirect()->route('servicos.index')
                           ->with('mensagem', 'Serviço criado com sucesso');

        }
        /**
         * Mostra o formulario para alteração
         *
         * @param integer $id
         * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
         */
              public function edit(int $id)
           {
               $servico = servico::findOrFail($id);

               return view('servicos.edit')->with('servico', $servico);
           }
           /**
            * Undocumented function
            *
            * @param integer $id
            * @param ServicoRiquest $request
            * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
            */
public function update(int $id, ServicoRiquest $request)
{
    $dados = $request->except(['_token','_method']);

    $servico = servico::findOrFail($id);

    $servico->update($dados);

    return redirect()->route('servicos.index')
                            ->with('mensagem', 'Serviço atualizado com sucesso');
     }
}

