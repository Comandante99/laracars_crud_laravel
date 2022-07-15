@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ route('manufacturers.update', $manufacuters)}}" method="POST">
    @csrf
    @method('PUT')
       <div class="form-group my-4">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name"  value="{{ $manufacuters->name }}">
       </div>
        @error('name')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
       <div class="form-group my-4">
          <label for="country">Country</label>
          <input type="text" class="form-control" id="country" name="country"  value="{{ $manufacuters->country }}">
       </div>
       @error('country')
            <div class="alert alert-danger">
                   {{ $message }}
             </div>
        @enderror
       {{-- <div class="form-group my-4">
          <label for="image-product">IMAGE</label>
          <input type="file" class="form-control" id="image-product" name="image-product"  placeholder="SKU NAME">
       </div> --}}

       <button type="submit" class="btn btn-primary">Submit</button>
 </form>
</div>

@endsection