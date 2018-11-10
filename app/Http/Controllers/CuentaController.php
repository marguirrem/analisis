<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cuentas = \App\Cuenta::all();
        return View('Cuenta.index',compact('cuentas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bancos = \App\Banco::all();
        return View('Cuenta.create',compact('bancos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validatedData = $request->validate([
        'name' => 'required|unique:bancos|min:3|max:255',
        'banco_id'=>'required',
        'numero'=>'required',
        ]);
        $banco = \App\Cuenta::create([
        'name'=>$request['name'],
        'numero'=>$request['numero'],
        'banco_id'=>$request['banco_id'],
        ]);
      return redirect('cuentas')->with('status','Cuenta creada con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $cuenta = \App\Cuenta::findOrFail($id);
      return View('Cuenta.show',compact('cuenta'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $bancos = \App\Banco::all();
      $cuenta = \App\Cuenta::findOrFail($id);
      return View('Cuenta.edit',compact(['bancos','cuenta']));
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
      $cuenta = \App\Cuenta::findOrFail($id);
      $cuenta->name=$request['name'];
      $cuenta->numero=$request['numero'];
      $cuenta->banco_id=$request['banco_id'];
      $cuenta->save();
      return redirect('cuentas/'.$cuenta->id.'/edit')->with('status','Información actualizada');
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
