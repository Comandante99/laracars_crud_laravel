<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufacturer;

class ManufacturerController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct()
    {
        $this->middleware('auth')->only('create');
        $this->middleware('auth')->only('edit');
    }

    public function index()
    {        	
        $manufacturers = Manufacturer::All();    	
        return view('manufacturers.index')->with('manu', $manufacturers); 	
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manufacturers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:2|max:50',
            'country' =>'required|min:2|max:50'
        ]);
        
        $create_manu = Manufacturer::create($data);

        return redirect()->route('manufacturers.index')->with('success', 'Manufacturers with a ' .$create_manu->name. ' has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Manufacturer  $manufacturer
     * @return \Illuminate\Http\Response
     */
    public function show(Manufacturer $manufacturer)
    {
        return view('manufacturers.show')->with('manufacturers', $manufacturer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Manufacturer  $manufacturer
     * @return \Illuminate\Http\Response
     */
    public function edit(Manufacturer $manufacturer)
    {
        return view('manufacturers.edit')->with('manufacuters', $manufacturer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Manufacturer  $manufacturer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manufacturer $manufacturer)
    {
        $data = $request->validate([
              'name' => 'required|min:2|max:50',
              'country' =>'required|min:2|max:50'
          ]);
          
        $manufacturer->update($data);

        return redirect()->route('manufacturers.index')->with('primary', 'Manufacturer with a Name ' .$manufacturer->name. ' has been updated successuflly!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Manufacturer  $manufacturer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manufacturer $manufacturer)
    {
        $manufacturer->delete();
        return redirect()->route('manufacturers.index')->with('danger', 'Manufactures has beeen deleted!');
    }
}
