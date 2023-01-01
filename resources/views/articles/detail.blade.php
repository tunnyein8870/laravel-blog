@extends("layouts/app")
@section("content")
<div class="container">
    <div class="card">
        <div class="card-title py-3 ps-3 m-0 bg-info text-light" style="font-size: 20px;">
            {{$detail_content->title}}
        </div>
        <p class="card-body">
            {{$detail_content->body}}
        </p>
        <span class="card-subtitle ps-3 pb-3">
            {{$detail_content->created_at->diffForHumans()}}
            <a class="btn btn-dark float-end ms-2 me-3" href="{{ url("/articles/delete/$detail_content->id") }}">
                <i class="fa fa-trash" aria-hidden="true"></i>
            </a>
            <a class="btn btn-dark ms-3 float-end" href="{{url('/')}}">
                <i class="fa fa-home" aria-hidden="true"></i>
            </a>
        </span>
        <div class="card-item py-2 bg-dark">

        </div>
        <div class="list-group">
            <div class="list-group-item bg-info text-light" style="font-size: 16px;">
                Comments {{count($detail_content->comments)}}
            </div>
            @foreach($detail_content->comments as $comment)
            <div class="list-group-item">
                {{$comment->content}}
                <span class="float-end">
                    {{$comment->created_at->diffForHumans()}}
                    <a class="mx-3" href="{{url("/comment/delete/$comment->id")}}">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                </span>
            </div>
            @endforeach
        </div>
        <form action="{{url("/comment/add")}}" method="POST" class="bg-info">
            @csrf
            <input type="hidden" name="article_id" value="{{ $detail_content->id }}">
            <textarea name="content" class="form-control p-3 mb-3" placeholder="New Comment"></textarea>
            <input type="submit" value="Add Comment" class="btn btn-dark ms-3 mb-3">
        </form>
    </div>
</div>
@endsection