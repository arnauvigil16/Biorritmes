<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuari;

class CalculBio extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bio.form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       /* $usuari = $request->session()->get('usuari');
        return view('webadd',['nomUsuari'=>$usuari->getName()]);*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $actual = date_create(date('Y-m-d'));
        $data_user = date_create($request->input('usuariData'));
        $name = $request->input('usuariNom');

        $diff = $data_user->diff($actual);

        $dias = $diff->format("%R%a");

        $resultadoFisic = (string) (($dias % 23) / 23) * 100;
        $resultadoEmocional = (string) (($dias % 28) / 28) * 100;
        $resultadoIntelectual = (string) (($dias % 33) / 33) * 100;


        if ($data_user > $actual) {
            return view('bio.error');
        }

        return view('bio.result',['nomUsuari'=>$name, 'dataNeixement'=>$data_user->format('d/m/Y'), 'progresFisic'=>$resultadoFisic, 'progresEmocional'=>$resultadoEmocional, 'progresIntelectual'=>$resultadoIntelectual]);
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
