<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Manufacturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class CarController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only('create');
        $this->middleware('auth')->only('edit');
    }
    
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars_list = Car::All();
        return view('cars.index')->with('list', $cars_list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $manufacturers = Manufacturer::all();
        return view('cars.create')->with('manufacturers', $manufacturers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {

        // $request = $request->all();
      $data = $request->validate([
        'manufacturers_id' => 'numeric|required',
        'model' => 'required|min:5|max:50',
        'year' => 'required',
        'engine' => 'required|min:2|max:50',
        'price' => 'required|numeric',
        'discount' => 'numeric|min:0|max:100',
        'transmission' => 'required|min:0|max:50',
        'power' => 'required|min:0|max:50',
        'color' => 'min:0|max:50',
        'door' => 'numeric|min:2',
        'properties' => 'min:0|max:50',
	
      ]);

     $list = Car::create($data);
        
     return redirect()->route('cars.index')->with('success', 'Cars with a Model ' . $list->model . ' has been saved!');
    //  return $request;
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view('cars.show')->with('car', $car);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view('cars.edit')->with('car',$car); //cars/edit/1
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car) //Richiesta con il POST tramite EDIT con il form, 1
    {
        $data = $request->validate([
            'manufacturers_id' => 'numeric',
            'model' => 'required|min:2|max:50',
            'year' => 'required',
            'engine' => 'required|min:2|max:50',
            'price' => 'required|numeric',
            'discount' => 'numeric|min:0|max:100',
            'transmission' => 'required|min:0|max:50',
            'power' => 'required|min:0|max:50',
            'color' => 'min:0|max:50',
            'door' => 'numeric|min:2',
            'propertie' => 'min:0|max:50'
          ]);

          $car->update($data);

        //   if($request->image) {         	
        //       $name = time().'.'.$request->image->extension();           	
        //       if(File::exists(public_path('images/cars' . $name)))             
        //             File::delete(public_path('images/cars' . $name));   
        //             $request->image->move(public_path('images/cars'), $name);             
        //             $car->image = $name;     	
        //    }
    
            

        return redirect()->route('cars.index')->with('primary', 'Car with a Model ' .$car->model. ' has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('cars.index')->with('danger', 'Car with a Model ' . $car->model .' has been delete!');
    }
}
