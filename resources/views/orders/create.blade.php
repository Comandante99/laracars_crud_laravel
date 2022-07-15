@extends('layouts.app')


<?php 

$list = ['Paypal', 'Bank Transfer', 'Other', 'Cash'];
?>

@section('content')

<div class="container my-5">
    <div class="container my-5">
      <h2 class="text-center">Create Order</h2>
     <form action="{{ route('orders.store')}}" method="POST">
       @csrf

      <input type="hidden" name="users_id" value="{{ Auth::user()->id }}"> 
      <div class="form-group my-4 vehicle-type">
          <label for="cars_id">Car_list</label>
          <select class="form-select" name="cars_id" id="cars_id">
                  <option disabled selected value> -- select an option -- </option>
                  @foreach ($car as $cars)
                        <option data-price="{{ $cars->price - ($cars->price * ($cars->discount / 100)) }}" value="{{ $cars->id }}">{{ $cars->model }}</option>
                        @endforeach
                  </select>
      </div> 
      @error('cards_id')
         <div class="alert alert-danger">
             {{ $message }}
         </div>
      @enderror

      <div class="form-group">
            <label for="total_amount">Price + Discount</label>
            <input readonly type="number" class="form-control price-input" name="total_amount" value="{{ old('total_amount')}}">
      </div>

      @error('total_amount')
          <div class="alert alert-danger">
               {{ $message }}
          </div>
       @enderror
      <div class="form-group my-4">
         <input hidden type="number" class="form-control" id="payment_completed" name="payment_completed"  value="1">
      </div>

      <div class="form-group my-4">
            <label for="payment_method">Payment method</label>
            <select name="payment_method" id="payment_method">
               @foreach($list as $list)
               <option value="{{ $list }}">{{ $list }}</option>
               @endforeach
               {{-- <input type="text" class="form-control" name="payment_method" value="{{ old('payment_method') }}"> --}}
            </select> 
      </div>
      @error('payment_method')
          <div class="alert alert-danger">
              {{ $message }}
          </div>
      @enderror
      <button type="submit" class="btn btn-primary">Pay Now!</button>
   </form>
</div>
</div>
    
@endsection