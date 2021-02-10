<?php

namespace App\Http\Controllers;

use App\Models\Pacienteh;
use Illuminate\Http\Request;

class PacientehController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos["pacientes"] = Pacienteh::paginate(5);
        return view("paciente.index",$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("paciente.create");
        redirect("paciente");
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
        $datosEmpleado = request()->except("_token");

        if($request->hasFile("Foto")){
            $datosEmpleado["Foto"]=$request->file("Foto")->store("uploads","public");
        }

        Pacienteh::insert($datosEmpleado);
        return response()->json($datosEmpleado);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pacienteh  $pacienteh
     * @return \Illuminate\Http\Response
     */
    public function show(Pacienteh $pacienteh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pacienteh  $pacienteh
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $paciente = Pacienteh::findOrFail($id);

        return view("paciente.edit",compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pacienteh  $pacienteh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         $datosEmpleado = request()->except(['_token','_method']);
        Pacienteh::where("id",'=',$id)->update($datosEmpleado);

        $paciente = Pacienteh::findOrFail($id);
        return redirect("paciente");
        // return view("paciente.edit",compact("paciente"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pacienteh  $pacienteh
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Pacienteh::destroy($id);
        return redirect("paciente");
    }
}
