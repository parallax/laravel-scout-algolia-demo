@extends('layouts.default')
@section('head')
@endsection
@section('content')
    <h2>Backend Geo Search Demo</h2>
    <form action="{{ route('demo.geo.results') }}" method="POST">
      {{ csrf_field() }}
        <div class="form-group">
            <label for="search-query">Search Query</label>
            <input type="text" name="search" class="form-control" id="search-query" placeholder="Search...">
        </div>
        <div class="form-group">
            <label for="search-latitude">Latitude</label>
            <input type="text" name="latitude" class="form-control" id="search-latitude" placeholder="Latitude" value="53.7957925">
        </div>
        <div class="form-group">
            <label for="search-longitude">Longitude</label>
            <input type="text" name="longitude" class="form-control" id="search-longitude" placeholder="Longitude" value="-1.5385938">
        </div>
        <div class="form-group">
            <label for="search-radius">Radius (Meters)</label>
            <input type="text" name="radius" class="form-control" id="search-radius" placeholder="Radius" value="{{ request()->get('radius') ?? '1000' }}">
        </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @if (isset($results))
      <div class="results-container text-left mt-4">
          <h3>Total Results: {{ $results->count() }}</h3>
        <ul class="list-group">
          @foreach($results as $result)
            <li class="list-group-item">
              <p>Name: {{ $result->name }}</p>
              <p>Address: {{ $result->address }}</p>
              <p>Manager: {{ $result->manager->name }}</p>
              <p>Location: {{ $result->latitude }}, {{ $result->longitude }}</p>
            </li>
          @endforeach
        </ul>
      </div>
    @endif
@endsection