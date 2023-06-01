<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\GuardarEmpleadoRequest;
use App\Http\Requests\ActualizarEmpleadoRequest;
use App\Http\Resources\EmpleadoResource;
use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* Primera forma
        return Empleado::all(); */

        return EmpleadoResource::collection(Empleado::paginate(1));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarEmpleadoRequest $request)
    {
        //Primera forma
        //retorna la respuesta de tipo JSON

        /* Empleado::create($request->all());


        return response()->json([
            'res' => true,
            'msg' => 'Registro exitoso'
        ]); */

        return (new EmpleadoResource(Empleado::create($request->all())))
                ->additional(['msg' => 'Registro exitoso']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //primera forma
        /* return response()->json([
            'res'       => true,
            'empleado'  => $empleado
        ],200); */

        return new EmpleadoResource($empleado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarEmpleadoRequest $request, Empleado $empleado)
    {
        //primera forma
       /*  $empleado->update($request->all());

        return response()->json([
            'res'       => true,
            'mensaje'  => 'Empleado actualizado correctamente'
        ],200); */

        $empleado->update($request->all());

        return (new EmpleadoResource($empleado))
        ->additional(['mensaje'  => 'Empleado actualizado correctamente'])
        ->response()
        ->setStatusCode(202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Empleado $empleado)
    {
        //primera forma
        /* $empleado->delete();

        return response()->json([
            'res'       => true,
            'mensaje'  => 'Empleado eliminado correctamente'
        ],200); */

        $empleado->delete();

        return (new EmpleadoResource($empleado))
        ->additional(['mensaje'  => 'Empleado eliminado correctamente']);
    }
}
