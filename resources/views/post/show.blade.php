@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{$post->title}}</h1>
            <b-img src="{{$post->image}}" fluid alt="Responsive image"></b-img>
            <p>{{$post->text}}</p>
        </div>
    </div>
</div>
@endsection
