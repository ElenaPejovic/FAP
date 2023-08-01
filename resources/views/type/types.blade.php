@extends('layouts.main')
@section('content')


    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Serial number</th>
                <th>Type of vehicle</th>
                <th>Vehicle model</th>
            </tr>
        </thead>
        <tbody>
            @foreach($allTypes as $type)
                <tr>
                    <td>{{$type->id}}</td>
                    <td>{{$type->serial_number}}</td>
                    <td>{{$type->type_of_vehicle}}</td>
                    <td>{{$type->vehicle_model}}</td>

                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

