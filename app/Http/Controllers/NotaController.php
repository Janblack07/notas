<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $notas = Nota::all();
        return view('notas.index',compact('notas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('notas.create');
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
        $nota = new Nota();
        $nota->nota1 = $request->nota1;
        $nota->nota2 = $request->nota2;
        $nota->nota3 = $request->nota3;
        $promedio=($request->nota1+$request->nota2+$request->nota3)/3;
        $nota->promedio=$promedio;
        $nota->save();
        return redirect('/notas');
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
        $nota = Nota::find($id);
        return view('notas.edit', compact('nota'));
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
        $nota = Nota::find($id);
        $nota->nota1 = $request->nota1;
        $nota->nota2 = $request->nota2;
        $nota->nota3 = $request->nota3;
        $promedio=($request->nota1+$request->nota2+$request->nota3)/3;
        $nota->promedio=$promedio;
        $nota->save();
        return redirect('/notas');
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
        Nota::find($id)->delete();
        return redirect('/notas');
    }
}
