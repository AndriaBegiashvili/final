@extends("layout")

@section("body")
    <h1>{{$user->email}}</h1>
    <a href="{{route('mine')}}" class="btn btn-primary">My quizzes</a>
    <a href="{{route('createq')}}" class="btn btn-primary">Create Quiz</a>
    @forelse ($quizzes as $quiz)
        <h4>{{$quiz->name}}</h4>
        <img src="{{$quiz->photo}}" style="width:200px; height:auto;">
        <p>{{$quiz->description}}</p>
        <a href="{{route('quiz',["quiz"=>$quiz])}}"><button class="btn btn-primary">Gamakete</button></a>
        <br>
        <br>
    @empty
        <p>No Quiz Available</p>
    @endforelse    
    <hr>
    <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>

@endsection