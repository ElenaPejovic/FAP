@extends('layouts.main')
@section('content')


    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Serial number</th>
                <th>Upgrade type</th>
                <th>Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach($allUpgrades as $upgrade)
                <tr>
                    <td>{{$upgrade->id}}</td>
                    <td>{{$upgrade->serial_number}}</td>
                    <td>{{$upgrade->upgrade_type}}</td>
                    <td><a href="{{route('upgrade-details',['id'=>$upgrade->id])}}">Details</a></td>

                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

