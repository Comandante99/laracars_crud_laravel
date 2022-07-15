@extends('layouts.app')

@section('content')

<div class="container my-5">
    <div class="container my-5">
      <h2 class="text-center">Create Manufacuters</h2>
     <form action="{{ route('manufacturers.store')}}" method="POST">
       @csrf
         <div class="form-group my-4">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name"  value="{{ old('name') }}">
         </div>
         <div class="form-group my-4">
            <label for="country">Country</label>
            <input type="text" class="form-control" id="country" name="country"  value="{{ old('country') }}">
         </div>
         {{-- <div class="form-group my-4">
            <label for="image-product">IMAGE</label>
            <input type="file" class="form-control" id="image-product" name="image-product"  placeholder="SKU NAME">
         </div> --}}

         <button type="submit" class="btn btn-primary">Submit</button>
   </form>
</div>
</div>
    
@endsection