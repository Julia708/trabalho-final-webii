<?php

namespace App\Http\Controllers;

use App\Models\Plugin;
use Illuminate\Http\Request;

class PluginController extends Controller
{
    public function index()
    {
        $plugins = Plugin::all();
        return view('plugins.index', compact('plugins'));
    }

    public function create()
    {
        return view('plugins.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string',
            'tipo' => 'required|string',
            'descricao' => 'nullable|string',
            'ativo' => 'required|boolean',
        ]);

        Plugin::create($validated);
        return redirect()->route('plugins.index')->with('success', 'Plugin criado com sucesso!');
    }

    public function show(Plugin $plugin)
    {
        return view('plugins.show', compact('plugin'));
    }

    public function edit(Plugin $plugin)
    {
        return view('plugins.edit', compact('plugin'));
    }

    public function update(Request $request, Plugin $plugin)
    {
        $validated = $request->validate([
            'nome' => 'required|string',
            'tipo' => 'required|string',
            'descricao' => 'nullable|string',
            'ativo' => 'required|boolean',
        ]);

        $plugin->update($validated);
        return redirect()->route('plugins.index')->with('success', 'Plugin atualizado com sucesso!');
    }

    public function destroy(Plugin $plugin)
    {
        $plugin->delete();
        return redirect()->route('plugins.index')->with('success', 'Plugin removido com sucesso!');
    }
}
