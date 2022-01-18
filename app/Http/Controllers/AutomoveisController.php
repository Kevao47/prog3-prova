<?php

namespace App\Http\Controllers;

use App\Models\Automovel;
use Illuminate\Http\Request;


class AutomoveisController extends Controller
{
    // View de home
    public function index(){
        return view('home')
                ->with([
                    'automoveis' => Automovel::orderBy('nome')->get(), 
                    'pagina' => 'home'
                ]);
    }

    // Retorna a view de visualização
    public function show($id){
        return view('automoveis.show')
                ->with([
                    'automovel' => Automovel::findOrFail($id), 
                    'pagina' => 'automovel-show'
                ]);
    }

    // Retorna a view de formulario
    public function create(){
        return view('automoveis.create')
                ->with(['pagina' => 'create-automovel']);
    }



    public function store(Request $request){
        // Validação e insersão de dados na tabela automovel

        $form = $request->validate([
            'nome' => 'required|string',
            'descricao' => 'required|string',
            'combustivel' => 'required|string',
            'ano' => 'required|string',
            'preco' => 'required|numeric',
            'imagem' => 'required|image|max:400000|mimes:jpg,png,jpeg',
        ]);

        $caminho = $form['imagem']->store('', 'imagens');

        Automovel::create([
            'nome' => $form['nome'],
            'descricao' => $form['descricao'],
            'foto' => $caminho ,
            'ano' => $form['ano'],
            'preco' => $form['preco'],
            'combustivel' => $form['combustivel'],
        ]);

        return redirect()->route('home');
    }
}
