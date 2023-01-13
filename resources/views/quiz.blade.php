@extends("layout")

@section('title', $quiz->name)
@section("body")
    <a href="{{route('home')}}" class="btn btn-primary">HOME</a>
    <p>{{ $user->email }}</p>
        <br>
        <br>  
        <h1>{{$quiz->name}}</h1>
        <p>{{$quiz->description}}</p>
        <img src="{{$quiz->photo}}">
       <a href="{{route('take',compact('quiz'))}}"> <button class="btn btn-primary" >Start Quiz</button></a>
    <hr>
    <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>

@endsection