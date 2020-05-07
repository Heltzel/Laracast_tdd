@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <article>
        <div class="card my-2">
          <div class="card-header">{{$thread->title}}</div>
          <div class="card-body">
            <p>{{$thread->body}}</p>
          </div>
        </div>
      </article>
    </div>
  </div>
</div>
@endsection