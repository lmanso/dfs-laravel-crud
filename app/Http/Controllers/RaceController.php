<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;
use App\Race;

class RaceController extends Controller
{
    public function showRaces(){
        $getAllRaces = Race::All();
        return view('races.show', compact('getAllRaces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $getAllRaces = Race::All();
        return view('races.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $race = new race([
            'name' => $request->name,
            'life' =>$request->life,
            'class' => $request->class,
        ]);
        $race->save();
        return redirect('races');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $race = Race::find($id);
        $getAllRaces = Race::All();
        return view('races.edit', compact('race', 'getAllRaces'));
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
        $race = Race::find($id);
        $race->name = $request->input('name');
        $race->life = $request->input('life');
        $race->class  = $request->input('class');
        $race->save();
        return redirect('races')->with('status', 'Race modifie');
    }

    public function delete(Request $request){
        Animal::destroy($request->input('id'));
        return redirect ('/animals');
    }
}
