<?php

namespace App\Http\Controllers;

use App\Http\Requests\CountryStoreRequest;
use App\Http\Requests\CountryUpdateRequest;
use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Country::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CountryStoreRequest $request)
    {
       // dd($request->validated());
        //instancia de pais 
        $country= new Country;
        $country->fill($request->validated());
       

        $country->save();
        return $country;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // return $id;   find or fail retorna 404 cuando el modelo no existe 
        $country= Country::findOrFail($id);
        return $country;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CountryUpdateRequest $request, $id)
    {
        $country= Country::findOrFail($id);
        $country->fill($request->validated());
        $country->save();

        return $country;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country= Country::findOrFail($id);
        $country->delete();
        return $country;
    }
}
