@extends('layouts.app')

@section('title', $slug)

@section('content')
  <div class="container">
    {{ $slug }}
  </div>
@endsection