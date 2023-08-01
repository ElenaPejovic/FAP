@extends('layouts.main')
@section('content')

    <h1>Detalji</h1>
        <h2>ID:</h2>{{$trunk->id}}
        <h2>Serial number:</h2>{{$trunk->serijski_broj}}
        <h2>Material:</h2>{{$trunk->material}}
        <h2>Dimensions:</h2>{{$trunk->dimensions}}


@endsection