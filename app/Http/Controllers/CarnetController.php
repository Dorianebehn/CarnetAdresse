<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carnet;

class CarnetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carnets = Carnet :: all();
        return view('index',compact('carnets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
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
        $storeData = $request->validate([
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'email' => 'required|max:255',
            'ville' => 'required|max:255',
            'adresse' => 'required|max:255',
            'numero' => 'required|numeric',
        ]);
        $carnets = Carnet::create($storeData);
        return redirect('/carnets')->with('completed', 'Contact has been saved!');

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
        $carnets = DB::table('carnets') ->where('id', $id)->first();

       
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
        $updateData = $request->validate([
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'email' => 'required|max:255',
            'ville' => 'required|max:255',
            'adresse' => 'required|max:255',
            'numero' => 'required|numeric',
        ]);
        Carnet::whereId($id)->update($updateData);
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
