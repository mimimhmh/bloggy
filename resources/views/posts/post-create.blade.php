@extends ('layouts.fullmaster')

@section ('content')
    <h1>Publish a post</h1>
    <form method="post" action="/posts">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Post title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
        </div>



        <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
            <small id="fileHelp" class="form-text text-muted">Post Image 840 x 341.
            </small>
        </div>

        <div class="form-group">
            <label for="textarea">Post body</label>
            <textarea class="form-control" id="textarea" name="body" rows="5"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Publish</button>
        </div>

    </form>

    @include('layouts.errors')

@endsection