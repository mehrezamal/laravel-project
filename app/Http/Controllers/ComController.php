<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\commande;
class ComController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //appel model
    $commandes = commande::all(); //select all from produit traja3ly tableau d objet des attributs sont public
    //appel view
    return view("commande.index",compact('commandes'));  //jebna view mn dossier hawalna var en tableau
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('commande.form');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        commande::create($request->all());
        echo "create successfully !";
		return redirect()->route('com.index');
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
         $commande=commande::find($id);
        return view('commande.edit', compact('commande'));
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
        $commande=commande::find($id);
        $commande->update($request->all());
		return redirect()->route('com.index');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $commande=commande::find($id);
        $commande->delete();
		return redirect()->route('com.index');
       

    }
}
