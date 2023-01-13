@extends("layout")

@section("body")
    <a href="{{route('home')}}" class="btn btn-primary">HOME</a>
    <p>{{ $user->email }}</p>
    <hr>

    <h1>{{$quiz->name}}</h1>

    <div id='main'>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div id='picture' class="col-md-4">
                    <img src='' class="img-fluid rounded-start" alt="no img">
                    <h3>0/1</h3>
                </div>
                <div class="col-md-8">
                    <div  id='question' class="card-body">
                        <h3 class="card-title"></h3>
                    </div>
                    <div  id='answers' class="card-body">
                    </div>

                </div>
            </div>
        </div>
</div>
    

   <script>
        window.onload = function(){
            fetch('http://127.0.0.1:8000/api/takeinf/{{$quiz}}')
            .then(response =>{
                return response.json();
            }).then(data=>{
                let div = document.getElementById('main');
                let div1 = document.getElementById('picture');
                let div2 = document.getElementById('question');
                let div3 = document.getElementById('answers');
                const a = data.questions;
            })
        }
   </script>
    
    
    
    <hr>
    <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>

@endsection