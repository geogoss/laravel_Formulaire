@extends('layouts.app')
@section('content')
    <h1>welcome</h1>
    <ul>
        @foreach ($members as $member)
            <li>{{$member->name}}</li>
        @endforeach
    </ul>
@endsection