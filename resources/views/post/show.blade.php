@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <post-show :post="{{$post}}"></post-show>
        </div>
    </div>
</div>
@endsection
