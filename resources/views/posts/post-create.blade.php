@extends ('layouts.fullmaster')

@section ('content')
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>

    <!-- Include Editor JS files. -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.1//js/froala_editor.pkgd.min.js"></script>

    <h1>Publish a post</h1>
    <form method="post" action="/posts">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Post title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
        </div>

        <div class="form-group">
            <label for="mainImage">Main Image</label>
            <input type="file" name="large_img_url" class="form-control-file" id="mainImage"
                   aria-describedby="fileHelp">
            <small id="fileHelp" class="form-text text-muted">Post Image 840 x 341.
            </small>
        </div>

        <div class="form-group">
            <label for="postEditor">Post body</label>
            <textarea class="form-control" id="postEditor" name="body"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Publish</button>
        </div>

    </form>
    <!-- Initialize the editor. -->
    <script>
        $(function () {
            $('#postEditor').froalaEditor({
                // Set the file upload URL.
                imageUploadURL: '/upload_image',

                imageUploadParams: {
                    id: 'postEditor'
                },
                height: 300
            })
        });
    </script>

    @include('layouts.errors')

@endsection