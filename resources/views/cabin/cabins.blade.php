@extends('layouts.main')
@section('content')


    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Seat number</th>
                <th>Material</th>
                <th>Detail</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($allCabins as $cabin)
                <tr>
                    <td>{{$cabin->id}}</td>
                    <td>{{$cabin->seat_number}}</td>
                    <td>{{$cabin->material}}</td>
                    <td><a href="{{route('cabin-details',['id'=>$cabin->id])}}">Details</a></td>

                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

