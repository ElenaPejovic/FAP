@extends('layouts.main')
@section('content')

    <h1>Details</h1>
        <h2>ID:</h2>{{$upgrade->id}}
        <h2>Serial number:</h2>{{$upgrade->serial_number}}
        <h2>Type of upgrade:</h2>{{$upgrade->upgrade_type}}


@endsection