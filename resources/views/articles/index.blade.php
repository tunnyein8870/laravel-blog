@extends("layouts/app")
@section("content")
<div class="container">
    {{$article_contents}}

    @foreach($article_contents as $content)
    <div class="card mb-2">
        <h2 class="card-title p-3 bg-info text-light">
            {{$content->title}}
        </h2>
        <p class="card-body">
            {{$content->body}}
        </p>
        <span class="card-subtitle ms-3">
            <i class="text-muted">{{$content->created_at->diffForHumans()}}</i>
            <a class="text-dark mx-4 float-end" href="{{ url("/articles/delete/$content->id") }}">
                <b><i class="fa fa-trash" aria-hidden="true"></i>
                </b>
            </a>
            <a class="text-dark mx-2 float-end" href="{{ url("/articles/detail/$content->id") }}">
                <b><i class="fa fa-eye" aria-hidden="true"></i>
                </b>
            </a>
        </span>
        <div class="ms-3 mb-3">

        </div>
    </div>
    @endforeach
</div>
@endsection