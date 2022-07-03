@extends('base')

@section('content')

<h1>{{$post->title}}</h1>
<div>
    {{$post->user->name}}<br />
    {{$post->created_at->format('F d, Y g:i A')}}
</div>
<hr>
{!! $post->content !!}

@endsection