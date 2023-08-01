@extends('layouts.main')
@section('content')


    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Dimensions</th>
                <th>Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach($allFrames as $frame)
                <tr>
                    <td>{{$frame->id}}</td>
                    <td>{{$frame->dimensions}}</td>
                    <td><a href="{{route('frame-details',['id'=>$frame->id])}}">Details</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

