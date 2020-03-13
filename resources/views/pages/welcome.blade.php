@extends('main')
@section('title','| Homepage' )
@section('content')
            <div class="row">
                 <div class="com-md-12">
                    <div class="jumbotron">
                        <h1>Welkom</h1>
                        <p class="lead">Laravel website</p>
                      <p><a class="btn btn-primary btn-lg" href="#" role="button">nieuwste post</a></p>
                    </div>
                </div>
            </div> <!-- end .row -->
            <div class="row">
                <div class="col-md-12">

                    @foreach($posts as $post)
                         <div class="post">
                         <h3>{{ $post -> title}}</h3>
                         <p>{{ substr($post->body, 0 , 300) }} {{ strlen($post->body) > 300 ? "..." : ""}}</p>
                         <a href="#" class="btn btn-primary">Read More </a>
                         </div>
                          <hr>
                    @endforeach
                </div>
            </div> <!-- end row -->
@endsection