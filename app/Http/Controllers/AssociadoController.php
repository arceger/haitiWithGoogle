<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssociadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Associado::create([
            'nome' => $request->nome,
            'est_civel' => $request->est_civel,
            'endereco' => $request->endereco,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'telefone_rec' => $request ->telefone_rec,
            'cidade' => $request ->cidade,
            'estado' => $request -> estado,
            'description' => $request -> description,
            ]);

            Grupo::create([
                'categoria' => $request -> categoria,
                'email' => $request -> email,
                'nome' => $request -> nome,
               ]);

            return view ('caddep',$request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = Associado::all();
        return view('show',['associados'=>$data]) ;
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
