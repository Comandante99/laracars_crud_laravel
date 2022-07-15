@extends('layouts.app')

@section('content')

<div class="container my-5">
    <div class="container my-5">
      <h2 class="text-center">Create Cars</h2>
     <form action="{{ route('cars.store')}}" method="POST">
       @csrf
         <div class="form-group my-4">
            <label for="manufacturers_id">ManuFacturers</label>
            <br>
            <select class="form-select" name="manufacturers_id" id="manufacturers_id">
                    <option disabled selected value> -- select an option -- </option>
                    @foreach ($manufacturers as $manufacturer)
                          <option value="{{ $manufacturer->id }}">{{ $manufacturer->name }}</option>
                          @endforeach
                    </select>
        </div> 
         @error('manufacturers_id')
         <div class="alert alert-danger">
            {{ $message }}
         </div>
         @enderror
         <div class="form-group my-4">
            <label for="model">Model</label>
            <input type="text" class="form-control" id="model" name="model"  value="{{ old('model') }}">
         </div>
         @error('')
         <div class="alert alert-danger">
            {{ $message }}
         </div>
         @enderror
         <div class="form-group my-4">
            <label for="year">Year</label>
            <input type="number" class="form-control" id="year" name="year" value="{{ old('year') }}">
         </div>
         @error('')
         <div class="alert alert-danger">
            {{ $message }}
         </div>
         @enderror
         <div class="form-group my-4">
            <label for="engine">Engine</label>
            <input type="text"  class="form-control" id="engine" name="engine"   value="{{ old('engine') }}">
         </div>
         <div class="form-group my-4">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price"  value="{{ old('price') }}">
         </div>
         @error('price')
         <div class="alert alert-danger">
            {{ $message }}
         </div>
         @enderror
         <div class="form-group my-4">
            <label for="discount">Discount</label>
            <input type="number" class="form-control" id="discount" name="discount"  value="{{ old('discount') }}">
         </div>
         @error('discount')
         <div class="alert alert-danger">
            {{ $message }}
         </div>
         @enderror
         <div class="form-group my-4">
            <label for="transmission">Trasmission</label>
            <input type="text" class="form-control" id="transmission" name="transmission"  value="{{ old('transmission') }}">
         </div>
         @error('trasmission')
         <div class="alert alert-danger">
            {{ $message }}
         </div>
         @enderror
         <div class="form-group my-4">
            <label for="power">Power</label>
            <input type="text" class="form-control" id="power" name="power"  value="{{ old('power') }}">
         </div>
         @error('power')
         <div class="alert alert-danger">
            {{ $message }}
         </div>
         @enderror
         <div class="form-group my-4">
            <label for="color">Color</label>
            <input type="text" class="form-control" id="color" name="color"   value="{{ old('color') }}">
         </div>
         @error('color')
         <div class="alert alert-danger">
            {{ $message }}
         </div>
         @enderror        
         <div class="form-group my-4">
            <label for="door">Door</label>
            <input type="text" class="form-control" id="door" name="door"  value="{{ old('door') }}">
         </div>
         @error('door')
         <div class="alert alert-danger">
            {{ $message }}
         </div>
         @enderror
         <div class="form-group my-4">
            <label for="properties">Properties</label>
            <input type="text" class="form-control" id="properties" name="properties"  value="{{ old('properties') }}">
         </div>
         @error('properties')
            <div class="alert alert-danger">
               {{ $message }}
            </div>
         @enderror
         <button type="submit" class="btn btn-primary">Submit</button>
   </form>
</div>
</div>
    
@endsection