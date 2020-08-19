<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Auth::user()->pacientes;
        //
        return view('pacientes.index')->with('pacientes', $pacientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'nombre' => 'required|min:3',
            'apellido' => 'required|min:3',
            'documento' => 'required',
            'imagen' => 'image'
        ]);

        $ruta_imagen = $request['imagen']->store('foto-perfil', 'public');
        // resizes de la imagen
        $img = Image::make(public_path("storage/{$ruta_imagen}"))->fit(800, 400);
        $img->save();

        $data = $request->all();
        $data['imagen'] = $ruta_imagen;
        $data['user_id'] = Auth::user()->id;
        $paciente = Paciente::create($data);

        $paciente->save();


        return redirect()->action('PacienteController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        return view('pacientes.show', compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
