@extends('layouts.app')

@section('title', 'La liste des animés trop cool')

@section('css')
    
@endsection




@section('content')

    <p>Genres</p>
    @foreach ($animes[0]->genres as $genre)
        {{ $genre->gen_name }}
    @endforeach


    <br><br><br>


    <p>Studios</p>
    @foreach ($animes[0]->studios as $studio)
        {{ $studio->stu_name }}
    @endforeach


    <ul>
        @foreach ($genres as $genre)
            <li>
                {{$genre->gen_name}} 
                {{$genre->animes}}</li>
        @endforeach
    </ul>

@endsection
