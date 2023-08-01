@extends('layouts.main')
@section('content')


    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Serial number</th>
                <th>Type of vehicle</th>
                <th>Vehicle frame</th>
                <th>Vehicle cabin</th>
                <th>Vehicle trunk</th>
                <th>Special upgrade</th>
                <th>Status</th>
                <th>Details</th>

            </tr>
        </thead>
        <tbody>
            @foreach($allVehicles as $vehicle)
                <tr>
                    <td>{{$vehicle->id}}</td>
                    <td>{{$vehicle->serial_number}}</td>
                    <td>{{$vehicle->type_id}}</td>
                    <td>{{$vehicle->frame_id}}</td>
                    <td>{{$vehicle->cabin_id}}</td>
                    <td>{{$vehicle->trunk_id}}</td>
                    <td>{{$vehicle->upgrade_id}}</td>
                    <td>{{$vehicle->status}}</td>
                    <td><a href="{{route('deal-details',['id'=>$vehicle->id])}}">Details</a></td>

                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

