@extends('layouts.app')
@section('content')

<div class="container my-5">
    <div class="container text-center mt-5">
        <table class="table table-responsive-md">
          <thead class="bg-primary text-white">
            <tr>
              <th scope="col">MODEL</th>
              <th scope="col">YEAR</th>
              <th scope="col">ENGINE</th>
              <th scope="col">PRICE</th>
              <th scope="col">DISCOUNT</th>
              <th scope="col">TRANSMISSION</th>
              <th scope="col">POWER</th>
              <th scope="col">COLOR</th>
              <th scope="col">DOOR</th>
              <th scope="col">PROPERTIES</th>
              {{-- <th scope="col">IMAGE</th> --}}
            </tr>
          </thead>
          <tbody>
            <tr>
                <td>{{ $car->model }}</td>
                <td>{{ $car->year }}</td>
                <td>{{ $car->engine }}</td>
                <td>{{ $car->price }}</td>
                <td>{{ $car->discount }}</td>
                <td>{{ $car->trasmission }}</td>
                <td>{{ $car->power }}</td>
                <td>{{ $car->color }}</td>
                <td>{{ $car->door }}</td>
                <td>{{ $car->properties }}</td>
                {{-- <td><img src="{{ asset('images/cars/' .$car->image) }}"></td> --}}
                </td>
            </tr>
          </tbody>
        </table>
      </div>
</div>
<div class="container text-center">
    <a href="{{ route('cars.index', $car) }}" class="btn btn-primary">Back to the list</a>
</div>
@endsection