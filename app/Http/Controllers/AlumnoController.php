<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AlumnoController extends Controller
{
    //
    // Método privado para manejar llamadas HTTP repetitivas
    private function fetchDataFromApi($url)
    {
        $response = Http::get($url);
        return $response->json();
    }

    public function index()
    {

        $url = env('URL_SERVER_API');
        $alumnos = $this->fetchDataFromApi($url . '/alumnos/list');

        return view('alumnos.index', compact('alumnos'));
    }

    public function show($id)
    {

        $url = env('URL_SERVER_API');
        $alumnos = $this->fetchDataFromApi($url . '/alumnos/' . $id);

        return view('alumnos.show', compact('alumnos'));
    }

    public function create()
    {
        $url = env('URL_SERVER_API');
        $modulos = Http::get($url .'/modulos/list')->json();

        return view('alumnos.create',compact('modulos'));
    }

    public function salida(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'expediente' => 'required|string|max:255',
            'imagen' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
            'modulo_id' => 'required|integer|min:1',
        ]);

        $url = env('URL_SERVER_API');

        $file = $request->file('imagen');

        $response = Http::attach(
            'imagen',file_get_contents($file->getRealPath()),
            $file->getClientOriginalName())->post(env('URL_SERVER_API') . '/alumnos/store',[
            'nombre' => $request->nombre, 
            'apellido' => $request->apellido, 
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'expediente' => $request->expediente, 
            'modulo_id' => $request->modulo_id
            ]);

        return redirect()->route('alumnos.index');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');
        $modulos = Http::get($url .'/modulos/list')->json();
        $alumnos = $this->fetchDataFromApi($url . '/alumnos/' . $id);

        return view('alumnos.edit', compact('alumnos','modulos'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');

        Http::put($url . '/alumnos/' . $id, $request->all());

        return redirect()->route('alumnos.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/alumnos/' . $id);
        return redirect()->route('alumnos.index');
    }
}
