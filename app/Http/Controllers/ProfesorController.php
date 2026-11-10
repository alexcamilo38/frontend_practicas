<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProfesorController extends Controller
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
        $profesors = $this->fetchDataFromApi($url . '/profesors/list');

        return view('profesors.index', compact('profesors'));
    }

    public function show($id)
    {
        $url = env('URL_SERVER_API');

        $profesors = $this->fetchDataFromApi($url . '/profesors/' . $id);

        return view('profesors.show', compact('profesors'));
    }

     public function create()
    {
        return view('profesors.create');
    }

    public function salida(Request $request)
    {
        $url = env('URL_SERVER_API');

        Http::post($url . '/profesors/store', $request->all());

        return redirect()->route('profesors.index');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');
        $profesors = $this->fetchDataFromApi($url . '/profesors/' . $id);
        return view('profesors.edit', compact('profesors'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');

        Http::put($url . '/profesors/' . $id, $request->all());

        return redirect()->route('profesors.index');
    }

      public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/profesors/' . $id);
        return redirect()->route('profesors.index');
    }
}
