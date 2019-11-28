<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;
use App\Race;

class AnimalController extends Controller
{
    public function showAnimals(){
        $getAllAnimals = Animal::All();
        return view('animals.show', compact('getAllAnimals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $getAllRaces = Race::All();
        return view('animals.create', compact('getAllRaces'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $animal = new Animal([
            'name' => $request->name,
            'img' =>$request->img,
            'age' => $request->age,
            'gender' => $request->gender,
            'size' => $request->size,
            'weight' => $request->weight,
            'about' => $request->about,
            'race_id' => $request->race
        ]);
        $animal->save();
        return redirect('animals');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $animal = Animal::find($id);
        $getAllRaces = Race::All();
        return view('animals.edit', compact('animal', 'getAllRaces'));
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
        // dd($request);
        $animal = Animal::find($id);
        $animal->name = $request->input('name');
        $animal->img = $request->input('img');
        $animal->age  = $request->input('age');
        $animal->size  = $request->input('size');
        $animal->weight  = $request->input('weight');
        $animal->about  = $request->input('about');
        $animal->race_id  = $request->input('race');
        $animal->save();
        return redirect('animals')->with('status', 'Animal modifie');
    }

    public function delete($id){
        Animal::destroy($id);
        return redirect ('/animals');
    }
}
