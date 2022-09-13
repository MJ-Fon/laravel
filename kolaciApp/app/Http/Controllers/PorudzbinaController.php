<?php

namespace App\Http\Controllers;

use App\Http\Resources\PorudzbinaResource;
use App\Models\Porudzbina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PorudzbinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PorudzbinaResource::collection(Porudzbina::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'datum' => 'required|string',
            'kolicina' => 'required|integer',
            'proizvod_id' => 'required|integer', 
 
        ]);

        if ($validator->fails()) 
            return response()->json($validator->errors());
        $d = Porudzbina::create([
            'datum' => $request->datum, 
            'kolicina' => $request->kolicina, 
            'proizvod_id' => $request->proizvod_id, 


        ]);
        $d->save();
        return response()->json(['Objekat je  kreiran', new PorudzbinaResource($d)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Porudzbina  $porudzbina
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new PorudzbinaResource( Porudzbina::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Porudzbina  $porudzbina
     * @return \Illuminate\Http\Response
     */
    public function edit(Porudzbina $porudzbina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Porudzbina  $porudzbina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
           
            'datum' => 'string',
            'kolicina' => 'integer', 
            'proizvod_id' => 'integer',
             
        ]);

        if ($validator->fails()) 
            return response()->json($validator->errors());
        $d = Porudzbina::find($id);
        if($d){
            $d->datum=$request->datum;
            $d->kolicina=$request->kolicina;
            $d->proizvod_id=$request->proizvod_id; 
            $d->save();
            return response()->json( ["Uspesno izmenjeno!",new PorudzbinaResource($d)]);
        }else{
            return response()->json("Objekat ne postoji u bazi");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Porudzbina  $porudzbina
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = Porudzbina::find($id);
        if($d){
            $d->delete();
            return response()->json("Objekat uspesno obrisan");
        }else{
            return response()->json("Objekat ne postoji u bazi");
        }
    }
}
