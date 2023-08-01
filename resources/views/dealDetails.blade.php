@extends('layouts.main')
@section('content')

    <h1>{{ $vehicle->id }} {{ $vehicle->serial_number }}</h1>
    <p>
        Type of vehicle: {{ $vehicle->type_id }}
        Vehicle frame: {{ $vehicle->frame_id }}
        Vehicle cabin: {{ $vehicle->cabin_id }}
        Vehicle trunk: {{ $vehicle->trunk_id }}
        Vehicle upgrade: {{ $vehicle->upgrade_id }}
    </p>
    <form method="post" action="{{ route('change-status', ['id'=>$vehicle->id]) }}">
        @csrf
        <div class="form-group">
            <label>Status</label>
            <select class="form-control" name="status">
                <option>Delivered</option>
                <option>Processing</option>
                <option>Sent</option>
            </select>
        </div>
        <button class="btn btn-primary">Change status</button>
    </form>

@endsection