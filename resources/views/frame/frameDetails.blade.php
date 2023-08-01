@extends('layouts.main')
@section('content')

    <h1>Details</h1>
        <h2>ID:</h2>{{$ram->id}}
        <h2>Serial number:</h2>{{$frame->serial_number}}
        <h2>Material:</h2>{{$frame->material}}
        <h2>Dimensions:</h2>{{$frame->dimensions}}


@endsection