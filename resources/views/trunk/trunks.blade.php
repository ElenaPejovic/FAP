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
            @foreach($allTrunks as $trunk)
                <tr>
                    <td>{{$trunk->id}}</td>
                    <td>{{$trunk->dimensions}}</td>
                    <td><a href="{{route('trunk-details',['id'=>$trunk->id])}}">Details</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

