@extends('layouts.main')
@section('content')

<form method="post" action="{{ route('deals-processing') }}">
    @csrf
    <div class="form-group">
        <label>Serial number</label>
        <input class="form-control" name="serial_number">
    </div>
    <div class="form-group">
        <label>Frame</label>
        <select class="form-control" name="frame_id">
            @foreach($allFrames as $frame)
                <option value="{{ $frame->id }}">{{ $frame->serial_number }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Cabin</label>
        <select class="form-control" name="cabin_id">
            @foreach($allCabins as $cabin)
                <option value="{{ $cabin->id }}">{{ $cabin->serial_number}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Trunk</label>
        <select class="form-control" name="trunk_id">
            @foreach($allTrunks as $trunk)
                <option value="{{ $trunk->id }}">{{ $trunk->serial_number }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Type</label>
        <select class="form-control" name="type_id">
            @foreach($allTypes as $type)
                <option value="{{ $type->id }}">{{ $type->serial_number }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Upgrade</label>
        <select class="form-control" name="upgrade_id">
            @foreach($allUpgrades as $upgrade)
                <option value="{{ $upgrade->id }}">{{ $upgrade->serial_number }}</option>
            @endforeach
        </select>
    </div>
    
    <button class="btn btn-primary">Done</button>
</form>

@endsection

