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
      <a type="button" href="{{ route('cars.create') }}"class="btn btn-success">Create a New Cars</a>
    </div>
    <div class="container text-center mt-5">
        <table class="table table-responsive">
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
              <th scope="col" colspan="4">ACTIONS</th>
            </tr>
          </thead>
          <tbody>
            <tr>
             @foreach ($list as $car)
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
                @guest
                <td><a href="{{ route('cars.show', $car) }}" class="btn btn-outline-primary"> 
                  <i id="icons" class="fa fa-check-square-o" aria-hidden="true"></i><span>Show</span></a></td>
                <td>
                @else
                <td><a href="{{ route('cars.show', $car) }}" class="btn btn-outline-primary"> 
                    <i id="icons" class="fa fa-check-square-o" aria-hidden="true"></i><span>Show</span></a></td>
                <td>
                <td><a href="{{ route('cars.edit', $car) }}" class="btn btn-outline-warning"> 
                    <i id="icons" class="fa fa-check-square-o" aria-hidden="true"></i><span>Edit</span></a></td>
                <td>
                  <form action="{{ route('cars.destroy', $car) }}" method="post" >
                      @csrf
                      @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger">
                       <i class="fa fa-trash-o" aria-hidden="true"></i>
                       <span>Delete</span>
                    </button>
                  </form>
                </td>
                @endguest
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
</div>
@endsection