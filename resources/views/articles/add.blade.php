@extends("layouts/app")
@section("content")
<div class="container">
    @if($errors->any())
    <ol class="form-control mb-3 text-danger">
        @foreach ($errors->all() as $error)
        <li class="ms-3">{{$error}}</li>
        @endforeach
    </ol>
    @endif
    <form method="POST" class="form-control">
        @csrf
        <div class="form-control mb-3">
            <label>Title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3 form-control">
            <label>Body</label>
            <textarea class="form-control" name="body" require></textarea>
        </div>
        <div class="form-control">
            <label>Category</label>
            <select class="form-select" name="cat_id">
                @foreach($add_contents as $content)
                <option value="{{$content['id']}}">
                    {{$content['name']}}
                </option>
                @endforeach
            </select>
        </div>
        <div>
            <input type="submit" class="btn btn-primary mt-3 me-2" value="Add">
            <a class="btn btn-primary mt-3" href="/articles/add">
                <i class="fa fa-refresh" aria-hidden="true"></i>
            </a>
        </div>
    </form>
</div>
@endsection