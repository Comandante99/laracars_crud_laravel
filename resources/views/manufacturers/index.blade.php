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
     </div>
    @endif

    <div class="container">
        <a type="button" href="{{ route('manufacturers.create') }}"class="btn btn-success">Create a ManuFacturers</a>
      </div>
      <div class="container text-center mt-5">
          <table class="table table-responsive-md">
            <thead class="bg-primary text-white">
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Country</th>
                @guest 
                <th colspan="2">ACTIONS</th>
                @else
                <th colspan="4">ACTIONS</th>
                @endguest
              </tr>
            </thead>
            <tbody>
              <tr>
               @foreach ($manu as $manufacturers)
                  <td>{{ $manufacturers->name }}</td>
                  <td>{{ $manufacturers->country }}</td>
                  
                  @guest
                  <td><a href="{{ route('manufacturers.show', $manufacturers) }}" class="btn btn-outline-primary"> 
                      <i id="icons" class="fa fa-check-square-o" aria-hidden="true"></i><span>Show</span></a></td>
                  <td>
                    @else
                  <td><a href="{{ route('manufacturers.show', $manufacturers) }}" class="btn btn-outline-primary"> 
                      <i id="icons" class="fa fa-check-square-o" aria-hidden="true"></i><span>Show</span></a></td>
                  <td>
                  <td><a href="{{ route('manufacturers.edit', $manufacturers) }}" class="btn btn-outline-warning"> 
                      <i id="icons" class="fa fa-check-square-o" aria-hidden="true"></i><span>Edit</span></a></td>
                  <td>
                    <form action="{{ route('manufacturers.destroy', $manufacturers) }}" method="post" >
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