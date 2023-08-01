@extends('layouts.main')
@section('content')

    <h1>Details</h1>
        <h2>ID:</h2>{{$cabin->id}}
        <h2>Serial number:</h2>{{$cabin->serial_number}}
        <h2>Material:</h2>{{$cabin->material}}
        <h2>Seat number:</h2>{{$cabin->seat_number}}


@endsection