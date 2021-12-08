<?php

namespace App\Http\Controllers;

use App\Models\Assinantes\Assinantes;
use Illuminate\Http\Request;

class AssinantesController extends Controller
{

    //criar um atributo do tipo obj
    private $objAssinantes;

    //criar um contrutor
    //ao chamar o controle temos acesso ao objeto
    public function __construct()
    {
        $this->objAssinantes = new Assinantes();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assinantes = $this->objAssinantes->all();

        //compacte cria um array com variáveis e seus valores
        return view("Assinantes.index", compact('assinantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Assinantes.create');
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $assinantes = $this->objAssinantes->find($id);
        return view('assinantes.edit', compact('assinantes'));
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
