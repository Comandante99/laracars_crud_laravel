@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ route('cars.update', $car)}}" method="POST">
    @csrf
    @method('PUT')
       <div class="form-group my-4">
          <label for="manufacturers_id">ManuFacturers</label>
          <input type="number" class="form-control" id="manufacturers_id" name="manufacturers_id"  value="{{ $car->manufacturers_id }}">
       </div>
        @error('manufacturers_id')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
       <div class="form-group my-4">
          <label for="model">Model</label>
          <input type="text" class="form-control" id="model" name="model"  value="{{ $car->model }}">
       </div>
       @error('model')
            <div class="alert alert-danger">
                   {{ $message }}
             </div>
        @enderror
       <div class="form-group my-4">
          <label for="year">Year</label>
          <input type="number" class="form-control" id="year" name="year" value="{{ $car->year }}">
       </div>
       @error('year')
             <div class="alert alert-danger">
                   {{ $message }}
            </div>
        @enderror
       <div class="form-group my-4">
          <label for="engine">Engine</label>
          <input type="text"  class="form-control" id="engine" name="engine"   value="{{ $car->engine }}">
       </div>
       @error('engine')
            <div class="alert alert-danger">
              {{ $message }}
             </div>
        @enderror
       <div class="form-group my-4">
          <label for="price">Price</label>
          <input type="number" class="form-control" id="price" name="price"  value="{{ $car->price }}">
       </div>
       @error('price')
               <div class="alert alert-danger">
                  {{ $message }}
               </div>
       @enderror
       <div class="form-group my-4">
          <label for="discount">Discount</label>
          <input type="number" class="form-control" id="discount" name="discount"  value="{{ $car->discount }}">
       </div>
       @error('discount')
              <div class="alert alert-danger">
                  {{ $message }}
             </div>
        @enderror
       <div class="form-group my-4">
          <label for="transmission">Trasmission</label>
          <input type="text" class="form-control" id="transmission" name="transmission"  value="{{ $car->transmission }}">
       </div>
       @error('transmission')
             <div class="alert alert-danger">
                 {{ $message }}
             </div>
        @enderror
       <div class="form-group my-4">
          <label for="power">Power</label>
          <input type="text" class="form-control" id="power" name="power"  value="{{ $car->power }}">
       </div>
       @error('power')
            <div class="alert alert-danger">
                 {{ $message }}
             </div>
       @enderror
       <div class="form-group my-4">
          <label for="color">Color</label>
          <input type="text" class="form-control" id="color" name="color"   value="{{ $car->color }}">
       </div>
       @error('color')
             <div class="alert alert-danger">
                 {{ $message }}
                 </div>
        @enderror
       <div class="form-group my-4">
          <label for="door">Door</label>
          <input type="text" class="form-control" id="door" name="door"  value="{{ $car->door }}">
       </div>
        @error('door')
             <div class="alert alert-danger">
                   {{ $message }}
             </div>
        @enderror
       <div class="form-group my-4">
          <label for="properties">Properties</label>
          <input type="text" class="form-control" id="properties" name="properties"  value="{{ $car->prperties }}">
       </div>
       @error('properties')
             <div class="alert alert-danger">
             {{ $message }}
              </div>
         @enderror
       {{-- <div class="form-group my-4">
          <label for="image">IMAGE</label>
          <input type="file" class="form-control" id="image" name="image">
       </div> --}}

       <button type="submit" class="btn btn-primary">Submit</button>
 </form>
</div>

@endsection