@extends('base')

@section('title', 'List all properties')

@section('content')
    <div class="col-md-10 offset-md-2">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Type</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Region</th>
            </tr>
            </thead>
            <tbody>
            @foreach($properties as $property)
                <tr>
                    <th scope="row">{{ $property->id }}</th>
                    <td>{{ $property->type }}</td>
                    <td>{{ $property->title }}</td>
                    <td>{{ $property->description }}</td>
                    <td>{{ $property->region->name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
