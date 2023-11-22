<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\plat;

class PlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //appel model
    $plats = plat::all(); //select all from produit traja3ly tableau d objet des attributs sont public
    //appel view
    return view("plat.index",compact('plats'));  //jebna view mn dossier hawalna var en tableau
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('plat.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        plat::create($request->all());
        echo "create successfully !";
		return redirect()->route('prod.index');
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
    public function edit($id){
        // var_dump($produit);
         $plat=plat::find($id);
        return view('plat.edit', compact('plat'));
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
        $plat=plat::find($id);
        $plat->update($request->all());
		return redirect()->route('prod.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plat=plat::find($id);
        $plat->delete();
		return redirect()->route('prod.index');
       

    }
}
