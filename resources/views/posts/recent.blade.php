@extends('base')

@section('content')

<h1>Recent Posts</h1>
<hr>

<div class="d-flex justify-content-between">
    @foreach($recentPosts as $post)

    <div style="width: 31%" class="card align-self-stretched">
        <div class="card-body">
            <div class="card-title">
                <h4>{{$post->title}}</h4>
                <p>
                    {{$post->content}}
                </p>
            </div>
        </div>

        <div class="card-footer">
            @if($post->isEditable())
            <a href="{{url('/posts/edit/' . $post->id)}}" class="btn btn-info btn-sm">
                Edit
            </a>
            @endif
        </div>
    </div>
    @endforeach
</div>
@endsection