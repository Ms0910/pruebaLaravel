<?php

namespace App\Http\Controllers;

use App\Models\participante;
use Illuminate\Http\Request;

class ParticipanteController extends Controller
{
    
    public function index()
    {
        $participantes = Participante::all();
        return view('participantes.index', compact('participantes'));
    }

   
    public function create()
    {
        return view('participantes.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'tipodoc' => 'required|string|min:2|max:5|',
            'documento' => 'required|string|min:5|max:30',
            'fullname' => 'required|string|min:3|max:50',
            'fechanac' => 'required|date',
            'direccion' => 'required|string|min:3|max:50',
            'telefono' => 'required|integer|min:3|max:13',
            'email' => 'required|string|min:3|max:20',
        ]);

        Participante::created($request->all());

        return redirect()->route('participantes.index');

    }

    
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
