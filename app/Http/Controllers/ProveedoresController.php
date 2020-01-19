<?php

namespace App\Http\Controllers;

use App\Proveedor;
use App\Proveedores;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(
            'proveedores.index',
            ['proveedores' => Proveedores::all()]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $report = new Proveedores();
        $report->nombre = $request->get('nombre');
        $report->razon_social = $request->get('razon-social');
        $report->rfc = $request->get('rfc');
        $report->telefono = $request->get('telefono');
        $report->correo = $request->get('correo');
        $report->save();

        return redirect('/');
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
        $report = Proveedores::findOrFail($id);
        return View('Proveedores.edit', [
            'report' => $report
        ]);
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
        $report  = Proveedores::findOrFail($id);
        $report->nombre = $request->get('nombre');
        $report->razon_social = $request->get('razon-social');
        $report->rfc = $request->get('rfc');
        $report->telefono = $request->get('telefono');
        $report->correo = $request->get('correo');
        $report->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report  = Proveedores::findOrFail($id);
        $report->delete();

        return redirect('/');
    }

    public function confirmDelete($id)
    {
        $report = Proveedores::findOrFail($id);
        return view('proveedores.confirmDelete', [
            'report' => $report
        ]);
    }
}
