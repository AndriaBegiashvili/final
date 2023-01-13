@extends("layout")

@section("body")
    <h1>{{$user->email}}</h1>
    <a href="{{route('home')}}" class="btn btn-primary">Home</a>
    <a href="{{route('createq')}}" class="btn btn-primary">Create Quiz</a>
    @forelse ($quizzes as $quiz)
        <h4>{{$quiz->name}}</h4>
        <img src="{{$quiz->photo}}" style="width:200px; height:auto;">
        <p>{{$quiz->description}}</p>
        <a href="{{route('quiz',["quiz"=>$quiz])}}"><button class="btn btn-primary">Gamakete</button></a>
        <form action="/mine" method="POST">
            @csrf
        <a><button value="{{$quiz->name}}" class="btn btn-danger" name="delete">washla</button></a>
        </form>
        <br>
        <br>
    @empty
        <p>No Quiz Available</p>
    @endforelse    

@endsection