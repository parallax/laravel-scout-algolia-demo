@extends('layouts.default')

@section('head')
@endsection
@section('content')
    <h2>Backend Search Demo</h2>
    <form action="{{ route('demo.search.results') }}" method="POST">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="search-query">Search Query</label>
        <input type="text" name="search" class="form-control" id="search-query" placeholder="Search...">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @if (isset($results))
      <div class="results-container text-left mt-4">
        <ul class="list-group">
          @foreach($results as $result)
            <li class="list-group-item">
              <p>Name: {{ $result->name }}</p>
              <p>Address: {{ $result->address }}</p>
              <p>Manager: {{ $result->manager->name }}</p>
            </li>
          @endforeach
        </ul>
      </div>
    @endif
@endsection