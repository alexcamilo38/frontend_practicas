<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ModuloController extends Controller
{
    //
    // Método privado para manejar llamadas HTTP repetitivas
    private function fetchDataFromApi($url)
    {
        $response = Http::get($url);
        return $response->json() ;
    }

    public function index()
    {
        $url = env('URL_SERVER_API');
        $modulos = $this->fetchDataFromApi($url . '/modulos/list');

        return view('modulos.index', compact('modulos'));
    }

    public function show($id)
    {
        $url = env('URL_SERVER_API');

        $modulos = $this->fetchDataFromApi($url . '/modulos/' . $id);

        return view('modulos.show', compact('modulos'));
    }

     public function create()
    {
        return view('modulos.create');
    }

    public function salida(Request $request)
    {
        $url = env('URL_SERVER_API');

        Http::post($url . '/modulos/store', $request->all());

        return redirect()->route('modulos.index');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');
        $modulos = $this->fetchDataFromApi($url . '/modulos/' . $id);
        return view('modulos.edit', compact('modulos'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');

        Http::put($url . '/modulos/' . $id, $request->all());

        return redirect()->route('modulos.index');
    }

      public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/modulos/' . $id);
        return redirect()->route('modulos.index');
    }
}
