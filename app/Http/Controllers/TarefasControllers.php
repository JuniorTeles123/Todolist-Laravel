<?php

namespace App\Http\Controllers;

use App\Models\Tarefas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TarefasControllers
{
    public function index()
    {
        $tarefas = Tarefas::all();
  
        return view('tarefas.index')->with('tarefas', $tarefas);
    }

    public function show(Tarefas $tarefa )
    {
        return view('tarefas.show')->with('tarefa', $tarefa);
    }

    public function create()
    {
        return view('tarefas.create');

    }
    public function store(Request $request)
    {
        
        Tarefas::create($request->only('title'));

        return redirect('tarefas');

    }

    public function edit(Tarefas $tarefa)
    {
        return view('tarefas.edit', compact('tarefa'));
    }

    public function update(Request $request, Tarefas $tarefa)
    {
        $tarefa->fill($request->all())->save();
        return redirect()->route('tarefas.index');
    }

    public function destroy(Tarefas $tarefa)
    {
        $tarefa->delete();
        return redirect()->route('tarefas.index');
    }
}