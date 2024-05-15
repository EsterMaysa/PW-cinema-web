<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\Cinema;
use App\Models\Cliente;
use GuzzleHttp\Client;

class CinemaController extends Controller


{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cinema= Cinema::all();
        return view('cinema', compact('cinema'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    //SELEC
    public function store2(Request $request)
    {
        $cinema = new Cinema();

        $cinema->nomeCinema = $request->name;
        $cinema->logradouroCinema = $request->logradouro;
        $cinema->bairroCinema = $request->bairro;
        $cinema->cepCinema = $request->cep;
        $cinema->emailCinema = $request->email;
        $cinema->senhaCinema = $request->senha;
        $cinema->idFilmes = $request->idFilmes;
        $cinema->idIngressoFIlmeCinema = $request->idIngressoFilme;


        $cinema -> save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
