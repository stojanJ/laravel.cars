@extends('welcome')
  
 @include('layouts.about')
  @section('content')
       <h2>Cars</h2>
       @foreach ($cars as $car)
       <li> 
        <a href="{{ route('single-car', [ 'id' => $car->id ]) }}">
            {{ $car->title }}
        </a>
    </li>
       @endforeach
  @endsection
