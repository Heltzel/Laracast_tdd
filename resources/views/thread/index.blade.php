@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      @foreach ($threads as $thread)
      <article>
        <div class="card my-2">
          <div class="card-header">
            {{-- <a href="/thread/{{$thread->id}}">{{$thread->title}}</a> --}}
            <a href="{{$thread->path()}}">{{$thread->title}}</a>
          </div>
          <div class="card-body">
            <p>{{$thread->body}}</p>
          </div>
        </div>
      </article>
      @endforeach
    </div>
  </div>
</div>
@endsection