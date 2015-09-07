<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
//    public function index($nome)
//    {
//        return view('noticias.index', ['nome'=>$nome]);
//    }
     public function index()
    {
        $notas = [
                0 => 'Noticia 1',
                1 => 'Noticia 2',
                2 => 'Noticia 3',
                3 => 'Noticia 4',
                4 => 'Noticia 5',
                5 => 'Noticia 6'
        ];

        return view('noticias.index', ['notas'=>$notas]);

    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
