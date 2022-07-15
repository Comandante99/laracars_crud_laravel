@extends('layouts.app')

@section('content')
<div class="container">
  @if ($message = session('success'))
     <div class="alert alert-success">
         {{ $message }}
     </div>
  @elseif ($message = session('danger'))
     <div class="alert alert-danger">
         {{ $message }}
     </div>
  @elseif ($message = session('primary'))
     <div class="alert alert-primary">
         {{ $message }}
     </div>
  @endif
</div>

    <div class="container">
      <a type="button" href="{{ route('orders.create') }}"class="btn btn-success">Create a new Order</a>
    </div>
    <div class="container text-center mt-5">
        <table class="table table-responsive-md">
          <thead class="bg-primary text-white">
            <tr>
              <th scope="col">CARS_ID</th>
              <th scope="col">TOTAL AMAOUNT</th>
              <th scope="col">PAYMENT METHOD</th>
              <th scope="col">PAYMENT COMPLETED</th>
              @guest
              @else
              <th scope="col">ACTIONS</th>
              <th colspan="3"></th>
              @endguest
            </tr>
          </thead>
          <tbody>
      
            <tr>
             @foreach ($orders as $order)
                <td>{{ $order->cars_id }}</td>
                <td>{{ $order->total_amount }}</td>
                <td>{{ $order->payment_method }}</td>
                <td>{{ $order->payment_completed }}</td>
                @guest
                @else
                <th>
                    <form action="{{ route('orders.destroy', $order) }}" method="post" >
                        @csrf
                        @method('DELETE')
                      <button type="submit" class="btn btn-outline-danger">
                         <i class="fa fa-trash-o" aria-hidden="true"></i>
                         <span>Delete</span>
                      </button>
                    </form>

                </th>
                @endguest
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
</div>
@endsection