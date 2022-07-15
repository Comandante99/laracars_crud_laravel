@extends('layouts.app')
@section('content')

<div class="container my-5">
    <div class="container text-center mt-5">
        <table class="table table-responsive-md">
          <thead class="bg-primary text-white">
            <tr>
              <th scope="col">NAME</th>
              <th scope="col">COUNTRY</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td>{{ $manufacturers->name }}</td>
                <td>{{ $manufacturers->country }}</td>
                </td>
            </tr>
          </tbody>
        </table>
      </div>
</div>
<div class="container text-center">
    <a href="{{ route('manufacturers.index', $manufacturers) }}" class="btn btn-primary">Back to the list</a>
</div>
@endsection