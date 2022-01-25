@extends('layouts.main')

@section('content')
<div class="container">
  <h1>Lista viaggi</h1>

  {{-- @dump($trip) --}}

  {{-- <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Destination</th>
        <th scope="col">Duration</th>
        <th scope="col">Cost</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($trip as $singleTrip)
        <tr>
          <th scope="row">{{$trip->id}}</th>
          <td>{{$trip->Destination}}</td>
          <td>{{$trip->Trip_duration}}</td>
          <td>{{$trip->Cost}}</td>
        </tr>
      @endforeach
      
      
    </tbody>
  </table> --}}
</div>
@endsection
