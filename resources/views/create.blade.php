@extends("layout")

@section("body")
<br>
<a href="{{route('home')}}" class="btn btn-primary">Home</a>
<a href="{{route('mine')}}" class="btn btn-primary">My quizzes</a>
<br>
<br>
<form method="POST">
    @csrf
    <div class="row">
        <div class="col">
            <input class="form-control" placeholder="Quiz Name" name="input1">
        </div>
        <div class="col">
            <input class="form-control" placeholder="Photo" name="input2">
        </div>
        <div class="col">
            <input class="form-control" placeholder="Description" name="input3">
        </div>        
    </div>
    <br>
    <button class="btn btn-primary" name="form1">Create Quiz</button>
</form>
    <br>
    <br>
    <form method="POST">
        @csrf
    <div class="row">
        <div class="col">
            <input class="form-control" placeholder="Question" name="Question">
        </div>
        <div class="col">
            <input class="form-control" placeholder="picture" name="pic">
        </div>
        <div class="col">
            <input class="form-control" placeholder="Answer 1" name="Answer1">
        </div>
        <div class="col">
            <input class="form-control" placeholder="Answer 2" name="Answer2">
        </div>
        <div class="col">
            <input class="form-control" placeholder="Answer 3" name="Answer3" >
        </div>     
        <div class="col">
            <input class="form-control" placeholder="Answer 4" name="Answer4">
        </div>  
        <div class="col">
            <input class="form-control" placeholder="Correct" name="correct">
        </div>   
        <div class="col">
            <input class="form-control" placeholder="quiz id" name="id">
        </div>  
        <div class="col">
            <input class="form-control" placeholder="Position" name="position">
        </div> 
    </div>
    
    <br> 
    <button class="btn btn-primary" name="form2">Add Questions</button>
</form>
@endsection