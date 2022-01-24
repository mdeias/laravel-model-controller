@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Movies</h1>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Titolo Originale</th>
                <th scope="col">Nazionalità</th>
                <th scope="col">Data</th>
                <th scope="col">Voto</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($movies as $movie)
                <tr>
                    <th scope="row">{{ $movie->id }}</th>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->original_title }}</td>
                    <td>{{ $movie->nationality }}</td>
                    <td>{{ $movie->date }}</td>
                    <td>{{ $movie->vote }}</td>
                  </tr>
                @empty
                    
                @endforelse
              
            </tbody>
          </table>
    </div>
@endsection